/**
 * Golden Deer Brasil - Main JavaScript
 * Handles global functionality, navigation, modals, and interactions
 */

// Global variables
let currentModal = null;
let formValidation = {};

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeNavigation();
    initializeModals();
    initializeForms();
    initializeAnimations();
    initializeAnalytics();
    
    // Auto-hide alerts after 5 seconds
    setTimeout(() => {
        const alert = document.getElementById('form-alert');
        if (alert) {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        }
    }, 5000);
});

/**
 * Navigation Functions
 */
function initializeNavigation() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const navbar = document.getElementById('navbar-nav');
    
    if (mobileToggle && navbar) {
        mobileToggle.addEventListener('click', function() {
            navbar.classList.toggle('active');
            
            // Toggle hamburger icon
            const icon = this.querySelector('i');
            if (navbar.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navbar.contains(e.target) && !mobileToggle.contains(e.target)) {
                navbar.classList.remove('active');
                mobileToggle.querySelector('i').classList.replace('fa-times', 'fa-bars');
            }
        });
        
        // Close mobile menu when clicking on links
        navbar.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                navbar.classList.remove('active');
                mobileToggle.querySelector('i').classList.replace('fa-times', 'fa-bars');
            });
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Active navigation highlighting
    highlightActiveNavigation();
}

function highlightActiveNavigation() {
    const currentPage = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && currentPage.includes(href.replace('index.php?page=', ''))) {
            link.classList.add('active');
        }
    });
}

/**
 * Modal Functions
 */
function initializeModals() {
    // Create modal backdrop if it doesn't exist
    if (!document.querySelector('.modal-backdrop')) {
        const backdrop = document.createElement('div');
        backdrop.className = 'modal-backdrop';
        backdrop.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        `;
        document.body.appendChild(backdrop);
        
        backdrop.addEventListener('click', closeModal);
    }
    
    // Initialize modal close buttons
    document.querySelectorAll('[data-dismiss="modal"]').forEach(btn => {
        btn.addEventListener('click', closeModal);
    });
    
    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && currentModal) {
            closeModal();
        }
    });
}

function openLeadModal(audienceType = '') {
    const modal = document.getElementById('leadModal');
    const backdrop = document.querySelector('.modal-backdrop');
    
    if (modal && backdrop) {
        // Set audience type if provided
        if (audienceType) {
            const audienceInput = document.getElementById('modal-audience-type');
            if (audienceInput) {
                audienceInput.value = audienceType;
            }
            
            // Pre-select audience button
            const audienceButtons = document.querySelectorAll('.audience-btn');
            audienceButtons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('data-audience') === audienceType) {
                    btn.classList.add('active');
                }
            });
            
            // Show/hide audience selection
            const audienceSelection = document.getElementById('audience-selection');
            if (audienceSelection) {
                audienceSelection.style.display = audienceType ? 'none' : 'block';
            }
        }
        
        // Show modal
        modal.style.display = 'block';
        backdrop.style.opacity = '1';
        backdrop.style.visibility = 'visible';
        document.body.style.overflow = 'hidden';
        
        currentModal = modal;
        
        // Focus first input
        const firstInput = modal.querySelector('input[type="text"], input[type="email"]');
        if (firstInput) {
            setTimeout(() => firstInput.focus(), 100);
        }
        
        // Track modal opening
        trackEvent('modal_opened', {
            modal_type: 'lead_generation',
            audience_type: audienceType
        });
    }
}

function closeModal() {
    const backdrop = document.querySelector('.modal-backdrop');
    
    if (currentModal && backdrop) {
        currentModal.style.display = 'none';
        backdrop.style.opacity = '0';
        backdrop.style.visibility = 'hidden';
        document.body.style.overflow = '';
        
        currentModal = null;
        
        // Reset form if it's the lead modal
        const leadForm = document.getElementById('leadForm');
        if (leadForm) {
            leadForm.reset();
            clearFormErrors(leadForm);
            
            // Reset audience selection
            document.querySelectorAll('.audience-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            const audienceSelection = document.getElementById('audience-selection');
            if (audienceSelection) {
                audienceSelection.style.display = 'block';
            }
        }
    }
}

/**
 * Form Functions
 */
function initializeForms() {
    // Audience selection buttons
    document.querySelectorAll('.audience-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const audienceType = this.getAttribute('data-audience');
            
            // Update visual state
            document.querySelectorAll('.audience-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Update hidden input
            const audienceInput = document.getElementById('modal-audience-type');
            if (audienceInput) {
                audienceInput.value = audienceType;
            }
            
            // Hide audience selection after choice
            const audienceSelection = document.getElementById('audience-selection');
            if (audienceSelection) {
                audienceSelection.style.display = 'none';
            }
            
            // Track audience selection
            trackEvent('audience_selected', {
                audience_type: audienceType
            });
        });
    });
    
    // Form validation
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!validateForm(this)) {
                e.preventDefault();
                return false;
            }
            
            // Track form submission
            const formType = this.querySelector('input[name="form_type"]')?.value || 'unknown';
            trackEvent('form_submitted', {
                form_type: formType,
                form_id: this.id || 'unknown'
            });
            
            // Show loading state
            showFormLoading(this);
        });
    });
    
    // Real-time validation
    document.querySelectorAll('input, textarea, select').forEach(field => {
        field.addEventListener('blur', function() {
            validateField(this);
        });
        
        field.addEventListener('input', function() {
            // Clear error on input
            if (this.classList.contains('error')) {
                this.classList.remove('error');
                const errorMsg = this.parentNode.querySelector('.form-error');
                if (errorMsg) {
                    errorMsg.remove();
                }
            }
        });
    });
    
    // Phone number formatting
    document.querySelectorAll('input[type="tel"]').forEach(input => {
        input.addEventListener('input', function() {
            let value = this.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value.length <= 10) {
                    value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
                } else {
                    value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                }
            }
            this.value = value;
        });
    });
}

function validateForm(form) {
    let isValid = true;
    clearFormErrors(form);
    
    // Required field validation
    form.querySelectorAll('[required]').forEach(field => {
        if (!field.value.trim()) {
            showFieldError(field, 'Este campo é obrigatório.');
            isValid = false;
        }
    });
    
    // Email validation
    form.querySelectorAll('input[type="email"]').forEach(field => {
        if (field.value && !isValidEmail(field.value)) {
            showFieldError(field, 'E-mail inválido.');
            isValid = false;
        }
    });
    
    // Phone validation
    form.querySelectorAll('input[type="tel"]').forEach(field => {
        if (field.value && !isValidPhone(field.value)) {
            showFieldError(field, 'Telefone inválido.');
            isValid = false;
        }
    });
    
    // Audience type validation for lead form
    if (form.id === 'leadForm') {
        const audienceType = document.getElementById('modal-audience-type');
        if (!audienceType || !audienceType.value) {
            const audienceSelection = document.getElementById('audience-selection');
            if (audienceSelection) {
                audienceSelection.style.display = 'block';
                showError('Por favor, selecione o tipo de organização.');
            }
            isValid = false;
        }
    }
    
    return isValid;
}

function validateField(field) {
    clearFieldError(field);
    
    if (field.hasAttribute('required') && !field.value.trim()) {
        showFieldError(field, 'Este campo é obrigatório.');
        return false;
    }
    
    if (field.type === 'email' && field.value && !isValidEmail(field.value)) {
        showFieldError(field, 'E-mail inválido.');
        return false;
    }
    
    if (field.type === 'tel' && field.value && !isValidPhone(field.value)) {
        showFieldError(field, 'Telefone inválido.');
        return false;
    }
    
    return true;
}

function showFieldError(field, message) {
    field.classList.add('error');
    
    const errorElement = document.createElement('div');
    errorElement.className = 'form-error';
    errorElement.textContent = message;
    
    field.parentNode.appendChild(errorElement);
}

function clearFieldError(field) {
    field.classList.remove('error');
    const errorElement = field.parentNode.querySelector('.form-error');
    if (errorElement) {
        errorElement.remove();
    }
}

function clearFormErrors(form) {
    form.querySelectorAll('.error').forEach(field => {
        field.classList.remove('error');
    });
    form.querySelectorAll('.form-error').forEach(error => {
        error.remove();
    });
}

function showFormLoading(form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    if (submitBtn) {
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
        
        // Reset after 10 seconds (fallback)
        setTimeout(() => {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }, 10000);
    }
}

/**
 * Utility Functions
 */
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    const phoneRegex = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;
    return phoneRegex.test(phone);
}

function showError(message) {
    // Create or update error alert
    let alert = document.getElementById('error-alert');
    if (!alert) {
        alert = document.createElement('div');
        alert.id = 'error-alert';
        alert.className = 'alert alert-danger';
        alert.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10000;
            max-width: 300px;
            padding: 1rem;
            background: #dc3545;
            color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        `;
        document.body.appendChild(alert);
    }
    
    alert.innerHTML = `
        <i class="fas fa-exclamation-triangle"></i>
        <span class="ml-2">${message}</span>
    `;
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        if (alert) {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        }
    }, 5000);
}

function showSuccess(message) {
    // Create success alert
    const alert = document.createElement('div');
    alert.className = 'alert alert-success';
    alert.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 10000;
        max-width: 300px;
        padding: 1rem;
        background: #28a745;
        color: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    `;
    
    alert.innerHTML = `
        <i class="fas fa-check-circle"></i>
        <span class="ml-2">${message}</span>
    `;
    
    document.body.appendChild(alert);
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 300);
    }, 5000);
}

/**
 * Animation Functions
 */
function initializeAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.section, .card, .feature-item').forEach(el => {
        observer.observe(el);
    });
    
    // Counter animation
    animateCounters();
}

function animateCounters() {
    const counters = document.querySelectorAll('.stat-number, .trust-number');
    
    counters.forEach(counter => {
        const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
        if (target && target > 0) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = counter.textContent.replace(/[\d,]+/, Math.floor(current).toLocaleString('pt-BR'));
            }, 30);
        }
    });
}

/**
 * Video Functions
 */
function playHeroVideo() {
    // Placeholder for video functionality
    showSuccess('Funcionalidade de vídeo será implementada em breve.');
    
    trackEvent('video_play_attempted', {
        video_type: 'hero_demo'
    });
}

/**
 * Analytics Functions
 */
function initializeAnalytics() {
    // Track page view
    trackEvent('page_view', {
        page: window.location.pathname,
        title: document.title
    });
    
    // Track scroll depth
    let maxScrollDepth = 0;
    window.addEventListener('scroll', function() {
        const scrollPercent = Math.round((window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100);
        if (scrollPercent > maxScrollDepth) {
            maxScrollDepth = scrollPercent;
            
            // Track milestone scroll depths
            if ([25, 50, 75, 90].includes(scrollPercent)) {
                trackEvent('scroll_depth', {
                    depth: scrollPercent
                });
            }
        }
    });
    
    // Track clicks on important elements
    document.querySelectorAll('.btn, .nav-link, .card').forEach(element => {
        element.addEventListener('click', function() {
            trackEvent('element_clicked', {
                element_type: this.className,
                element_text: this.textContent?.trim().substring(0, 50),
                element_href: this.href
            });
        });
    });
}

function trackEvent(eventName, parameters = {}) {
    // Google Analytics 4
    if (typeof gtag !== 'undefined') {
        gtag('event', eventName, parameters);
    }
    
    // Facebook Pixel
    if (typeof fbq !== 'undefined') {
        fbq('track', eventName, parameters);
    }
    
    // Console log for development
    if (window.location.hostname === 'localhost' || window.location.hostname.includes('dev')) {
        console.log('Event tracked:', eventName, parameters);
    }
}

/**
 * Utility Functions for ROI Calculator
 */
function calculateROI(tonsPerDay, currentCostPerTon, years = 10) {
    // Equipment cost (BRL 267,000 per ton/day capacity)
    const equipmentCost = tonsPerDay * 267000;
    
    // Annual processing
    const annualTons = tonsPerDay * 365;
    const currentAnnualCost = annualTons * currentCostPerTon;
    
    // New cost (30% of current + operation costs)
    const newAnnualCost = currentAnnualCost * 0.30;
    const annualSavings = currentAnnualCost - newAnnualCost;
    
    // ROI calculations
    const totalSavings = annualSavings * years;
    const roiPercentage = ((totalSavings - equipmentCost) / equipmentCost) * 100;
    const paybackYears = equipmentCost / annualSavings;
    
    // Fertilizer revenue (estimated)
    const fertilizerTonsPerYear = annualTons * 0.15; // 15% becomes fertilizer
    const fertilizerRevenue = fertilizerTonsPerYear * 800; // R$ 800/ton avg price
    
    return {
        equipmentCost: equipmentCost,
        annualSavings: annualSavings,
        totalSavings: totalSavings,
        roiPercentage: roiPercentage,
        paybackYears: paybackYears,
        fertilizerRevenue: fertilizerRevenue,
        totalAnnualBenefit: annualSavings + fertilizerRevenue,
        netPresentValue: calculateNPV(equipmentCost, annualSavings + fertilizerRevenue, years, 0.08)
    };
}

function calculateNPV(initialInvestment, annualCashFlow, years, discountRate) {
    let npv = -initialInvestment;
    for (let year = 1; year <= years; year++) {
        npv += annualCashFlow / Math.pow(1 + discountRate, year);
    }
    return npv;
}

function formatCurrency(value) {
    return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    }).format(value);
}

function formatNumber(value, decimals = 0) {
    return new Intl.NumberFormat('pt-BR', {
        minimumFractionDigits: decimals,
        maximumFractionDigits: decimals
    }).format(value);
}

/**
 * Export functions for global access
 */
window.goldenDeer = {
    openLeadModal,
    closeModal,
    playHeroVideo,
    calculateROI,
    trackEvent,
    formatCurrency,
    formatNumber,
    showSuccess,
    showError
};