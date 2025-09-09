@extends('layout.auth')

<!-- Full Screen Background with Navbar Theme -->
<div class="min-h-screen bg-gradient-to-r from-indigo-900 via-sky-700 to-cyan-500 relative overflow-hidden">
    <!-- SVG Motif Pattern matching navbar -->
    <div class="absolute inset-0 w-full h-full pointer-events-none z-0">
        <svg width="100%" height="100%">
            <defs>
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="1" cy="1" r="1.5" fill="#ffffff22"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dots)" />
        </svg>
    </div>

    <!-- Animated floating elements -->
    <div class="particles"></div>

    <div class="flex items-center justify-center min-h-screen relative overflow-hidden px-4">
        <div class="login-container bg-white/95 backdrop-blur-xl p-12 rounded-3xl shadow-2xl w-full max-w-md relative">
            <!-- Animated decorative elements matching navbar theme -->
            <div class="absolute -top-4 -left-4 w-24 h-24 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-br from-indigo-400 to-sky-500 rounded-full opacity-20 animate-bounce-slow"></div>

            <div class="relative z-10">
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-black bg-gradient-to-r from-indigo-900 via-sky-700 to-cyan-500 bg-clip-text text-transparent mb-2 animate-title-glow">
                        Login Booking-App
                    </h2>
                    <p class="text-gray-600 font-medium">Masuk ke akun Anda</p>
                </div>

                @if (session('error'))
                    <div class="error-alert bg-gradient-to-r from-red-50 to-pink-50 border-l-4 border-red-500 text-red-700 p-4 rounded-xl mb-6 shadow-lg" role="alert">
                        <div class="flex items-center">
                            <div class="error-icon mr-3">
                                <svg class="w-5 h-5 animate-shake" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="font-medium">{{ session('error') }}</p>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div class="form-group">
                        <div class="floating-input">
                            <input type="email" name="email" id="email"
                                   class="peer w-full px-4 py-4 pt-6 border-2 border-gray-200 rounded-xl bg-gray-50/50 backdrop-blur-sm transition-all duration-300 focus:border-sky-500 focus:bg-white focus:shadow-lg focus:scale-105 @error('email') border-red-500 animate-shake @enderror"
                                   value="{{ old('email') }}" required autocomplete="email" placeholder=" ">
                            <label for="email" class="floating-label absolute left-4 top-4 text-gray-500 transition-all duration-300 peer-focus:top-2 peer-focus:text-xs peer-focus:text-sky-700 peer-focus:font-semibold peer-[:not(:placeholder-shown)]:top-2 peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-sky-700 peer-[:not(:placeholder-shown)]:font-semibold">
                                Email Address
                            </label>
                            <div class="input-glow absolute inset-0 rounded-xl bg-gradient-to-r from-sky-500 to-cyan-500 opacity-0 transition-opacity duration-300 peer-focus:opacity-20 -z-10"></div>
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-2 ml-1 animate-fade-in flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="floating-input">
                            <input type="password" name="password" id="password"
                                   class="peer w-full px-4 py-4 pt-6 border-2 border-gray-200 rounded-xl bg-gray-50/50 backdrop-blur-sm transition-all duration-300 focus:border-sky-500 focus:bg-white focus:shadow-lg focus:scale-105 @error('password') border-red-500 animate-shake @enderror"
                                   required autocomplete="current-password" placeholder=" ">
                            <label for="password" class="floating-label absolute left-4 top-4 text-gray-500 transition-all duration-300 peer-focus:top-2 peer-focus:text-xs peer-focus:text-sky-700 peer-focus:font-semibold peer-[:not(:placeholder-shown)]:top-2 peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-sky-700 peer-[:not(:placeholder-shown)]:font-semibold">
                                Password
                            </label>
                            <div class="input-glow absolute inset-0 rounded-xl bg-gradient-to-r from-sky-500 to-cyan-500 opacity-0 transition-opacity duration-300 peer-focus:opacity-20 -z-10"></div>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-sm mt-2 ml-1 animate-fade-in flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="login-btn w-full bg-gradient-to-r from-indigo-900 via-sky-700 to-cyan-500 text-white font-bold py-4 px-6 rounded-xl shadow-lg hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-sky-500/50 transition-all duration-300 transform hover:scale-105 active:scale-95 relative overflow-hidden group">
                        <span class="relative z-10 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 transition-transform duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Masuk
                        </span>
                        <div class="shimmer absolute inset-0 -left-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-1000 group-hover:left-full"></div>
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <p class="text-gray-600 font-medium">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="register-link text-transparent bg-gradient-to-r from-sky-700 to-cyan-600 bg-clip-text font-bold hover:from-indigo-900 hover:to-sky-600 transition-all duration-300 relative group">
                            Daftar sekarang
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-sky-700 to-cyan-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom animations */
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px) scale(0.95); }
        100% { opacity: 1; transform: translateY(0) scale(1); }
    }

    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    @keyframes titleGlow {
        0%, 100% {
            text-shadow: 0 0 20px rgba(14, 165, 233, 0.5),
                         0 0 30px rgba(6, 182, 212, 0.3),
                         0 0 40px rgba(59, 130, 246, 0.2);
        }
        50% {
            text-shadow: 0 0 30px rgba(14, 165, 233, 0.8),
                         0 0 40px rgba(6, 182, 212, 0.6),
                         0 0 50px rgba(59, 130, 246, 0.4);
        }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
        50% { transform: translateY(-20px) rotate(180deg); opacity: 0.8; }
    }

    @keyframes bounceCustom {
        0%, 20%, 53%, 80%, 100% { transform: translate3d(0,0,0); }
        40%, 43% { transform: translate3d(0,-30px,0); }
        70% { transform: translate3d(0,-15px,0); }
        90% { transform: translate3d(0,-4px,0); }
    }

    /* Animation classes */
    .login-container {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        animation-delay: 0.2s;
    }

    .error-alert {
        animation: fadeInDown 0.5s ease-out both, shake 0.5s ease-in-out 0.3s both;
    }

    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }

    .animate-fade-in {
        animation: fadeInDown 0.3s ease-out both;
    }

    .animate-title-glow {
        animation: titleGlow 3s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounceCustom 3s infinite;
    }

    /* Floating input styles */
    .floating-input {
        position: relative;
    }

    .floating-label {
        pointer-events: none;
        transform-origin: left top;
    }

    /* Particle system */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .particles::before,
    .particles::after {
        content: '';
        position: absolute;
        width: 6px;
        height: 6px;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }

    .particles::before {
        top: 20%;
        left: 20%;
        animation-delay: 0s;
    }

    .particles::after {
        top: 60%;
        right: 20%;
        animation-delay: 4s;
    }

    /* Button shimmer effect */
    .shimmer {
        transform: skewX(-20deg);
    }

    /* Form group animations */
    .form-group {
        animation: fadeInUp 0.6s ease-out both;
    }

    .form-group:nth-child(2) { animation-delay: 0.4s; }
    .form-group:nth-child(3) { animation-delay: 0.5s; }

    /* Enhanced focus states */
    .peer:focus ~ .floating-label {
        color: #0369a1;
        font-weight: 600;
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
        .login-container {
            margin: 1rem;
            padding: 2rem 1.5rem;
        }

        .login-container h2 {
            font-size: 2rem;
        }
    }

    /* Loading state */
    .login-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none !important;
    }

    /* Additional particle effects */
    @keyframes particle1 {
        0% { transform: translateY(100vh) translateX(0px) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100px) translateX(100px) rotate(360deg); opacity: 0; }
    }

    .particles {
        overflow: visible;
    }

    .particles::before {
        animation: particle1 12s linear infinite;
        animation-delay: 2s;
    }
</style>

<script>
    // Enhanced particle system
    document.addEventListener('DOMContentLoaded', function() {
        const particlesContainer = document.querySelector('.particles');

        // Create additional floating particles
        for (let i = 0; i < 15; i++) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: ${Math.random() * 4 + 2}px;
                height: ${Math.random() * 4 + 2}px;
                background: rgba(255, 255, 255, ${Math.random() * 0.6 + 0.3});
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: float ${Math.random() * 6 + 4}s ease-in-out infinite;
                animation-delay: ${Math.random() * 4}s;
            `;
            particlesContainer.appendChild(particle);
        }

        // Add form interaction enhancements
        const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.closest('.form-group').style.transform = 'translateY(-2px)';
                this.closest('.form-group').style.transition = 'transform 0.3s ease';
            });

            input.addEventListener('blur', function() {
                this.closest('.form-group').style.transform = 'translateY(0)';
            });

            // Add typing effect
            input.addEventListener('input', function() {
                this.style.transform = 'scale(1.02)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Enhanced button interactions
        const submitBtn = document.querySelector('.login-btn');
        submitBtn.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;

            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });

    // Add ripple keyframes
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
</script>
