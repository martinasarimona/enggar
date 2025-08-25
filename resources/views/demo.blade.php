@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Manajerial - Direktorat SDM Universitas Diponegoro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .sidebar-item:hover { transform: translateX(4px); transition: all 0.2s ease; }
        .progress-bar { transition: width 0.5s ease; }
        .learning-card:hover { transform: translateY(-2px); transition: all 0.3s ease; }
        .external-link { background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%); }
        .completed-checkmark { animation: checkmark 0.5s ease-in-out; }
        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .pulse-green { animation: pulse-green 2s infinite; }
        @keyframes pulse-green {
            0%, 100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
        }
        .quiz-prompt { animation: slideIn 0.3s ease-out; }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .navy-gradient { background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%); }
        .navy-light { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); }
        .hero-animation { animation: fadeInUp 1s ease-out; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .float-animation { animation: float 3s ease-in-out infinite; }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-200 min-h-screen">
    
    <!-- Landing Page -->
    <div id="landing-page" class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="navy-gradient shadow-lg">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-4">
                            <span class="text-3xl text-blue-800">🎓</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-white">Universitas Diponegoro</h1>
                            <p class="text-blue-100">Direktorat Sumber Daya Manusia</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-white font-semibold">UNDIP</div>
                        <div class="text-blue-100 text-sm">Excellence with Morality</div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="flex-1 flex items-center justify-center px-6 py-12">
            <div class="max-w-4xl mx-auto text-center hero-animation">
                <div class="mb-8 float-animation">
                    <div class="w-32 h-32 navy-gradient rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                        <span class="text-6xl text-white">📚</span>
                    </div>
                </div>
                
                <h1 class="text-5xl font-bold text-gray-800 mb-6">
                    Pelatihan Manajerial
                </h1>
                
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Program pengembangan kompetensi kepemimpinan dan manajemen untuk meningkatkan kualitas sumber daya manusia di lingkungan Universitas Diponegoro
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">👥</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Servant Leadership</h3>
                        <p class="text-sm text-gray-600">Kepemimpinan yang melayani dan memberdayakan</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🎯</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Priority & Management</h3>
                        <p class="text-sm text-gray-600">Prioritas, delegasi, dan supervisi efektif</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">💬</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Assertive Communication</h3>
                        <p class="text-sm text-gray-600">Komunikasi asertif dan efektif</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">💻</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Effective Work</h3>
                        <p class="text-sm text-gray-600">Tools produktivitas modern</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl max-w-md mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Siap Memulai?</h2>
                    <p class="text-gray-600 mb-6">Akses sistem pembelajaran interaktif dengan materi lengkap dan kuis evaluasi</p>
                    
                    <button onclick="enterTrainingSystem()" class="w-full navy-gradient text-white font-semibold py-4 px-8 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                        <span class="flex items-center justify-center">
                            <span class="mr-2">🚀</span>
                            Masuk ke Sistem Pelatihan
                        </span>
                    </button>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <p>&copy; 2024 Universitas Diponegoro - Direktorat Sumber Daya Manusia</p>
                <p class="text-gray-400 text-sm mt-1">Sistem Pelatihan Manajerial</p>
            </div>
        </footer>
    </div>

    <!-- Training System -->
    <div id="training-system" class="hidden">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <div class="w-80 bg-white shadow-xl border-r border-gray-200">
                <div class="p-6 border-b border-gray-200 navy-gradient">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4">
                            <span class="text-2xl text-blue-800">🎓</span>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-white">UNDIP</h1>
                            <p class="text-xs text-blue-100">Universitas Diponegoro</p>
                        </div>
                    </div>
                    <h2 class="text-lg font-bold text-white">Sistem Pelatihan</h2>
                    <p class="text-sm text-blue-100 mt-1">Direktorat Sumber Daya Manusia</p>
                </div>
                
                <div class="p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Pelatihan Manajerial</h2>
                        <button onclick="backToLanding()" class="text-blue-600 hover:text-blue-800 text-sm">
                            ← Kembali
                        </button>
                    </div>
                    <div class="space-y-2">
                        <div class="sidebar-item p-4 rounded-lg cursor-pointer bg-blue-50 border-l-4 border-blue-800 hover:bg-blue-100" onclick="selectTraining('managerial')">
                            <h3 class="font-medium text-gray-800">Pelatihan Manajerial</h3>
                            <p class="text-sm text-gray-600">Leadership & Management Skills</p>
                            <div class="mt-2 flex items-center justify-between">
                                <div class="text-xs text-blue-800">4 Materi • 4 Kuis</div>
                                <div class="text-xs text-green-600 font-medium" id="overall-progress">0% Selesai</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Progress Summary -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-medium text-gray-700 mb-3">Progress Pembelajaran</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Materi Selesai</span>
                                <span class="font-medium" id="material-progress">0/4</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Kuis Selesai</span>
                                <span class="font-medium" id="quiz-progress">0/4</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                                <div class="progress-bar bg-gradient-to-r from-blue-800 to-blue-600 h-2 rounded-full" style="width: 0%" id="sidebar-progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col">
                <!-- Header -->
                <div class="bg-white shadow-sm border-b border-gray-200 p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 id="training-title" class="text-2xl font-bold text-gray-800">Pelatihan Manajerial</h2>
                            <p id="training-desc" class="text-gray-600 mt-1">Mengembangkan kemampuan kepemimpinan dan manajemen yang efektif</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="text-right">
                                <div class="text-sm text-gray-600">Progress Keseluruhan</div>
                                <div class="text-lg font-semibold text-blue-800" id="progress-text">0/8 Item</div>
                            </div>
                            <div class="w-32 bg-gray-200 rounded-full h-3">
                                <div class="progress-bar bg-gradient-to-r from-blue-800 to-blue-600 h-3 rounded-full" style="width: 0%" id="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="flex-1 p-6">
                    <div class="max-w-6xl mx-auto">
                        <!-- Learning Path -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Jalur Pembelajaran</h3>
                            <p class="text-gray-600">Ikuti urutan pembelajaran dari materi hingga kuis untuk hasil optimal</p>
                        </div>

                        <!-- Learning Items -->
                        <div class="space-y-8">
                            <!-- Servant Leadership -->
                            <div class="bg-white rounded-xl shadow-lg p-6" id="section-servant-leadership">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                        <span class="text-2xl">👥</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">1. Servant Leadership</h3>
                                        <p class="text-gray-600">Memahami konsep kepemimpinan yang melayani dan memberdayakan tim</p>
                                    </div>
                                    <div class="section-completion hidden">
                                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">✓</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Material -->
                                    <div class="learning-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-4 cursor-pointer hover:shadow-md transition-all" onclick="openMaterial('servant-leadership')" id="material-servant-leadership">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-blue-800 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">📖</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-800">Materi Pembelajaran</h4>
                                                <p class="text-sm text-gray-600">1,5 JP • Google Drive</p>
                                            </div>
                                            <div class="completion-indicator hidden">
                                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-700 mb-3">Akses materi lengkap tentang konsep servant leadership</p>
                                        <div class="flex items-center justify-between">
                                            <span class="status-badge text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">🔗 Tersedia</span>
                                            <span class="text-blue-800 text-sm font-medium">Buka Materi →</span>
                                        </div>
                                    </div>

                                    <!-- Quiz -->
                                    <div class="learning-card bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-lg p-4 cursor-pointer hover:shadow-md transition-all" onclick="openQuiz('servant-leadership')" id="quiz-servant-leadership">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-indigo-700 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">📝</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-800">Kuis Evaluasi</h4>
                                                <p class="text-sm text-gray-600">15 Soal • Wordwall</p>
                                            </div>
                                            <div class="completion-indicator hidden">
                                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-700 mb-3">Uji pemahaman Anda dengan 15 pertanyaan interaktif</p>
                                        <div class="flex items-center justify-between">
                                            <span class="status-badge text-xs bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full">🎯 Tersedia</span>
                                            <span class="text-indigo-700 text-sm font-medium">Mulai Kuis →</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Priority, Delegate, Manage & Supervision -->
                            <div class="bg-white rounded-xl shadow-lg p-6" id="section-priority-delegate-manage">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                                        <span class="text-2xl">🎯</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">2. Priority, Delegate, Manage & Supervision</h3>
                                        <p class="text-gray-600">Teknik menetapkan prioritas, delegasi, dan supervisi yang efektif</p>
                                    </div>
                                    <div class="section-completion hidden">
                                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">✓</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Material -->
                                    <div class="learning-card bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-4 cursor-pointer hover:shadow-md transition-all" onclick="openMaterial('priority-delegate-manage')" id="material-priority-delegate-manage">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-red-700 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">📖</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-800">Materi Pembelajaran</h4>
                                                <p class="text-sm text-gray-600">1,5 JP • Google Drive</p>
                                            </div>
                                            <div class="completion-indicator hidden">
                                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-700 mb-3">Akses materi lengkap tentang prioritas dan manajemen</p>
                                        <div class="flex items-center justify-between">
                                            <span class="status-badge text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">🔗 Tersedia</span>
                                            <span class="text-red-700 text-sm font-medium">Buka Materi →</span>
                                        </div>
                                    </div>

                                    <!-- Quiz -->
                                    <div class="learning-card bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg p-4 cursor-pointer hover:shadow-md transition-all" onclick="openQuiz('priority-delegate-manage')" id="quiz-priority-delegate-manage">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-orange-700 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">📝</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-800">Kuis Evaluasi</h4>
                                                <p class="text-sm text-gray-600">15 Soal • Wordwall</p>
                                            </div>
                                            <div class="completion-indicator hidden">
                                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-700 mb-3">Uji pemahaman Anda dengan 15 pertanyaan interaktif</p>
                                        <div class="flex items-center justify-between">
                                            <span class="status-badge text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded-full">🎯 Tersedia</span>
                                            <span class="text-orange-700 text-sm font-medium">Mulai Kuis →</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Assertive Communication -->
                            <div class="bg-white rounded-xl shadow-lg p-6 opacity-75" id="section-assertive-communication">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                        <span class="text-2xl">💬</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">3. Assertive Communication</h3>
                                        <p class="text-gray-600">Komunikasi asertif untuk membangun hubungan kerja yang efektif</p>
                                    </div>
                                    <div class="section-completion hidden">
                                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">✓</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Material -->
                                    <div class="learning-card bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-4 cursor-not-allowed" id="material-assertive-communication">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">🔒</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-600">Materi Pembelajaran</h4>
                                                <p class="text-sm text-gray-500">1,5 JP • Terkunci</p>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-3">Selesaikan materi sebelumnya terlebih dahulu</p>
                                        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">🔒 Terkunci</span>
                                    </div>

                                    <!-- Quiz -->
                                    <div class="learning-card bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-4 cursor-not-allowed" id="quiz-assertive-communication">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">🔒</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-600">Kuis Evaluasi</h4>
                                                <p class="text-sm text-gray-500">15 Soal • Terkunci</p>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-3">Selesaikan materi terlebih dahulu</p>
                                        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">🔒 Terkunci</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Effective Work -->
                            <div class="bg-white rounded-xl shadow-lg p-6 opacity-75" id="section-effective-work">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                        <span class="text-2xl">💻</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">4. Effective Work</h3>
                                        <p class="text-gray-600">Microsoft Office, G-Drive, dan Chat AI GPT untuk produktivitas</p>
                                    </div>
                                    <div class="section-completion hidden">
                                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">✓</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Material -->
                                    <div class="learning-card bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-4 cursor-not-allowed" id="material-effective-work">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">🔒</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-600">Materi Pembelajaran</h4>
                                                <p class="text-sm text-gray-500">1,5 JP • Terkunci</p>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-3">Selesaikan materi sebelumnya terlebih dahulu</p>
                                        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">🔒 Terkunci</span>
                                    </div>

                                    <!-- Quiz -->
                                    <div class="learning-card bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-4 cursor-not-allowed" id="quiz-effective-work">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white text-sm">🔒</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-600">Kuis Evaluasi</h4>
                                                <p class="text-sm text-gray-500">15 Soal • Terkunci</p>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mb-3">Selesaikan materi terlebih dahulu</p>
                                        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">🔒 Terkunci</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for External Links -->
    <div id="external-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md mx-4">
            <div class="text-center">
                <div class="w-16 h-16 external-link rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl text-white">🔗</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2" id="modal-title">Membuka Link Eksternal</h3>
                <p class="text-gray-600 mb-6" id="modal-description">Anda akan diarahkan ke platform eksternal untuk mengakses materi pembelajaran.</p>
                
                <div class="flex space-x-4">
                    <button class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="closeModal()">
                        Batal
                    </button>
                    <button class="flex-1 px-4 py-2 bg-blue-800 text-white rounded-lg hover:bg-blue-900 transition-colors" onclick="confirmExternalLink()" id="confirm-btn">
                        Buka Link
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz Prompt Modal -->
    <div id="quiz-prompt-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md mx-4 quiz-prompt">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 pulse-green">
                    <span class="text-3xl text-white">🎉</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Materi Selesai!</h3>
                <p class="text-gray-600 mb-6" id="quiz-prompt-description">Anda telah menyelesaikan materi. Apakah ingin langsung mengerjakan kuis sekarang?</p>
                
                <div class="flex space-x-3">
                    <button class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="closeQuizPrompt()">
                        Nanti Saja
                    </button>
                    <button class="flex-1 px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors" onclick="proceedToQuiz()" id="proceed-quiz-btn">
                        Kerjakan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md mx-4">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 pulse-green">
                    <span class="text-3xl text-white">✓</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2" id="success-title">Selamat!</h3>
                <p class="text-gray-600 mb-6" id="success-description">Anda telah menyelesaikan item pembelajaran.</p>
                
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors" onclick="closeSuccessModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        let pendingUrl = '';
        let pendingType = '';
        let pendingId = '';
        let pendingQuizId = '';
        
        // Progress tracking
        let completedItems = JSON.parse(localStorage.getItem('completedItems') || '[]');
        
        function enterTrainingSystem() {
            document.getElementById('landing-page').classList.add('hidden');
            document.getElementById('training-system').classList.remove('hidden');
            initializeProgress();
        }

        function backToLanding() {
            document.getElementById('training-system').classList.add('hidden');
            document.getElementById('landing-page').classList.remove('hidden');
        }
        
        function initializeProgress() {
            // Mark completed items
            completedItems.forEach(itemId => {
                markAsCompleted(itemId, false);
            });
            
            // Update quiz availability for all sections
            ['servant-leadership', 'priority-delegate-manage', 'assertive-communication', 'effective-work'].forEach(sectionId => {
                updateQuizAvailability(sectionId);
            });
            
            updateOverallProgress();
        }

        function selectTraining(trainingId) {
            // This function can be expanded if more trainings are added
            updateOverallProgress();
        }

        function openMaterial(materialId) {
            const materials = {
                'servant-leadership': {
                    title: 'Materi Servant Leadership',
                    description: 'Anda akan diarahkan ke Google Drive untuk mengakses materi Servant Leadership.',
                    url: 'https://drive.google.com/file/d/1FIUyvrPVAwOtMm6UoH7rH-t3ICa7auYN/view?usp=sharing',
                    type: 'material'
                },
                'priority-delegate-manage': {
                    title: 'Materi Priority, Delegate, Manage & Supervision',
                    description: 'Anda akan diarahkan ke Google Drive untuk mengakses materi Priority & Management.',
                    url: 'https://drive.google.com/file/d/1I8EgbjyHD5d06PCz8feWJJvff9SjRGSN/view?usp=sharing',
                    type: 'material'
                },
                'assertive-communication': {
                    title: 'Materi Assertive Communication',
                    description: 'Anda akan diarahkan ke Google Drive untuk mengakses materi Assertive Communication.',
                    url: '#',
                    type: 'material'
                },
                'effective-work': {
                    title: 'Materi Effective Work',
                    description: 'Anda akan diarahkan ke Google Drive untuk mengakses materi Effective Work.',
                    url: '#',
                    type: 'material'
                }
            };
            
            const material = materials[materialId];
            
            if (material && material.url) {
                showExternalModal(material.title, material.description, material.url, 'material', materialId);
            } else {
                alert('Materi ini belum tersedia. Silakan selesaikan materi sebelumnya terlebih dahulu.');
            }
        }



        function openQuiz(quizId) {
            const quizzes = {
                'servant-leadership': {
                    title: 'Kuis Servant Leadership',
                    description: 'Anda akan diarahkan ke Wordwall untuk mengerjakan kuis Servant Leadership (15 soal).',
                    url: 'https://wordwall.net/play/95933/882/221',
                    type: 'quiz'
                },
                'priority-delegate-manage': {
                    title: 'Kuis Priority, Delegate, Manage & Supervision',
                    description: 'Anda akan diarahkan ke Wordwall untuk mengerjakan kuis Priority & Management (15 soal).',
                    url: 'https://wordwall.net/play/96057/707/774',
                    type: 'quiz'
                },
                'assertive-communication': {
                    title: 'Kuis Assertive Communication',
                    description: 'Anda akan diarahkan ke Wordwall untuk mengerjakan kuis Assertive Communication (15 soal).',
                    url: '#',
                    type: 'quiz'
                },
                'effective-work': {
                    title: 'Kuis Effective Work',
                    description: 'Anda akan diarahkan ke Wordwall untuk mengerjakan kuis Effective Work (15 soal).',
                    url: '#',
                    type: 'quiz'
                }
            };
            
            const quiz = quizzes[quizId];
            
            if (quiz && quiz.url && quiz.url !== '#') {
                showExternalModal(quiz.title, quiz.description, quiz.url, 'quiz', quizId);
            } else {
                alert('Kuis ini belum tersedia. Silakan selesaikan materi terlebih dahulu atau tunggu link kuis tersedia.');
            }
        }

        function showExternalModal(title, description, url, type, id) {
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-description').textContent = description;
            document.getElementById('external-modal').classList.remove('hidden');
            
            pendingUrl = url;
            pendingType = type;
            pendingId = id;
            
            const confirmBtn = document.getElementById('confirm-btn');
            confirmBtn.textContent = type === 'quiz' ? 'Mulai Kuis' : 'Buka Materi';
        }

        function closeModal() {
            document.getElementById('external-modal').classList.add('hidden');
            pendingUrl = '';
            pendingType = '';
            pendingId = '';
        }

        function confirmExternalLink() {
            if (pendingUrl) {
                // Mark as completed BEFORE opening the link
                const itemKey = pendingType + '-' + pendingId;
                if (!completedItems.includes(itemKey)) {
                    completedItems.push(itemKey);
                    localStorage.setItem('completedItems', JSON.stringify(completedItems));
                    markAsCompleted(itemKey, true);
                    updateOverallProgress();
                }
                
                window.open(pendingUrl, '_blank');
                closeModal();
                
                // Show appropriate feedback
                if (pendingType === 'material') {
                    setTimeout(() => {
                        showQuizPrompt(pendingId);
                    }, 500);
                } else {
                    setTimeout(() => {
                        showSuccessModal(pendingType, pendingId);
                    }, 500);
                }
            }
        }

        function showQuizPrompt(materialId) {
            pendingQuizId = materialId;
            document.getElementById('quiz-prompt-description').textContent = 
                `Anda telah menyelesaikan materi ${getTopicName(materialId)}. Apakah ingin langsung mengerjakan kuis sekarang?`;
            document.getElementById('quiz-prompt-modal').classList.remove('hidden');
        }

        function closeQuizPrompt() {
            document.getElementById('quiz-prompt-modal').classList.add('hidden');
            pendingQuizId = '';
            showSuccessModal('material', pendingQuizId);
        }

        function proceedToQuiz() {
            document.getElementById('quiz-prompt-modal').classList.add('hidden');
            if (pendingQuizId) {
                openQuiz(pendingQuizId);
            }
            pendingQuizId = '';
        }

        function getTopicName(id) {
            const names = {
                'servant-leadership': 'Servant Leadership',
                'priority-delegate-manage': 'Priority & Management',
                'assertive-communication': 'Assertive Communication',
                'effective-work': 'Effective Work'
            };
            return names[id] || '';
        }

        function markAsCompleted(itemKey, animate = false) {
            const [type, id] = itemKey.split('-');
            const elementId = type + '-' + id;
            const element = document.getElementById(elementId);
            
            if (element) {
                // Show completion indicator
                const indicator = element.querySelector('.completion-indicator');
                if (indicator) {
                    indicator.classList.remove('hidden');
                    if (animate) {
                        indicator.querySelector('.completed-checkmark')?.style.setProperty('animation', 'checkmark 0.5s ease-in-out');
                    }
                }
                
                // Update status badge
                const statusBadge = element.querySelector('.status-badge');
                if (statusBadge) {
                    statusBadge.className = 'status-badge text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full';
                    statusBadge.innerHTML = '✓ Selesai';
                }
                
                // Check if both material and quiz are completed for this section
                const sectionId = 'section-' + id;
                const materialCompleted = completedItems.includes('material-' + id);
                const quizCompleted = completedItems.includes('quiz-' + id);
                
                if (materialCompleted && quizCompleted) {
                    const sectionElement = document.getElementById(sectionId);
                    if (sectionElement) {
                        const sectionCompletion = sectionElement.querySelector('.section-completion');
                        if (sectionCompletion) {
                            sectionCompletion.classList.remove('hidden');
                        }
                    }
                    
                    // Unlock next section
                    unlockNextSection(id);
                }
            }
            
            // Update quiz availability for current section
            updateQuizAvailability(id);
        }

        function updateQuizAvailability(sectionId) {
            const materialCompleted = completedItems.includes('material-' + sectionId);
            const quizElement = document.getElementById('quiz-' + sectionId);
            
            if (quizElement && materialCompleted) {
                // Enable quiz if material is completed
                quizElement.classList.remove('cursor-not-allowed');
                quizElement.classList.add('cursor-pointer', 'hover:shadow-md');
                quizElement.onclick = () => openQuiz(sectionId);
                
                // Update quiz styling
                const quizIcon = quizElement.querySelector('.w-8.h-8');
                if (quizIcon) {
                    quizIcon.className = 'w-8 h-8 bg-indigo-700 rounded-lg flex items-center justify-center mr-3';
                    quizIcon.innerHTML = '<span class="text-white text-sm">📝</span>';
                }
                
                const quizBadge = quizElement.querySelector('.status-badge');
                if (quizBadge && !completedItems.includes('quiz-' + sectionId)) {
                    quizBadge.className = 'status-badge text-xs bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full';
                    quizBadge.innerHTML = '🎯 Tersedia';
                }
            }
        }

        function unlockNextSection(completedSectionId) {
            const sectionOrder = ['servant-leadership', 'priority-delegate-manage', 'assertive-communication', 'effective-work'];
            const currentIndex = sectionOrder.indexOf(completedSectionId);
            
            if (currentIndex >= 0 && currentIndex < sectionOrder.length - 1) {
                const nextSectionId = sectionOrder[currentIndex + 1];
                const nextSection = document.getElementById('section-' + nextSectionId);
                
                if (nextSection) {
                    // Remove opacity and enable the section
                    nextSection.classList.remove('opacity-75');
                    
                    // Enable material access
                    const materialElement = document.getElementById('material-' + nextSectionId);
                    if (materialElement) {
                        materialElement.classList.remove('cursor-not-allowed', 'bg-gradient-to-br', 'from-gray-50', 'to-gray-100');
                        materialElement.classList.add('cursor-pointer', 'hover:shadow-md', 'transition-all', 'bg-gradient-to-br', 'from-blue-50', 'to-blue-100');
                        materialElement.onclick = () => openMaterial(nextSectionId);
                        
                        // Update material styling
                        const materialIcon = materialElement.querySelector('.w-8.h-8');
                        if (materialIcon) {
                            materialIcon.className = 'w-8 h-8 bg-blue-800 rounded-lg flex items-center justify-center mr-3';
                            materialIcon.innerHTML = '<span class="text-white text-sm">📖</span>';
                        }
                        
                        const materialTitle = materialElement.querySelector('h4');
                        if (materialTitle) {
                            materialTitle.className = 'font-semibold text-gray-800';
                        }
                        
                        const materialTime = materialElement.querySelector('p');
                        if (materialTime) {
                            materialTime.className = 'text-sm text-gray-600';
                            materialTime.textContent = getMaterialDuration(nextSectionId) + ' • Google Drive';
                        }
                        
                        const materialDesc = materialElement.querySelectorAll('p')[1];
                        if (materialDesc) {
                            materialDesc.className = 'text-sm text-gray-700 mb-3';
                            materialDesc.textContent = getMaterialDescription(nextSectionId);
                        }
                        
                        const materialBadge = materialElement.querySelector('.status-badge');
                        if (materialBadge) {
                            materialBadge.className = 'status-badge text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full';
                            materialBadge.innerHTML = '🔗 Tersedia';
                        }
                        
                        const materialAction = materialElement.querySelector('span:last-child');
                        if (materialAction) {
                            materialAction.className = 'text-blue-800 text-sm font-medium';
                            materialAction.textContent = 'Buka Materi →';
                        }
                    }
                }
            }
        }

        function getMaterialDuration(sectionId) {
            const durations = {
                'priority-delegate-manage': '1,5 JP',
                'assertive-communication': '1,5 JP',
                'effective-work': '1,5 JP'
            };
            return durations[sectionId] || '1,5 JP';
        }

        function getMaterialDescription(sectionId) {
            const descriptions = {
                'priority-delegate-manage': 'Akses materi lengkap tentang prioritas dan manajemen',
                'assertive-communication': 'Akses materi lengkap tentang komunikasi asertif',
                'effective-work': 'Akses materi lengkap tentang tools produktivitas'
            };
            return descriptions[sectionId] || 'Akses materi pembelajaran';
        }

        function updateOverallProgress() {
            const totalItems = 8; // 4 materials + 4 quizzes
            const completedCount = completedItems.length;
            const percentage = Math.round((completedCount / totalItems) * 100);
            
            // Count materials and quizzes separately
            const materialCount = completedItems.filter(item => item.startsWith('material-')).length;
            const quizCount = completedItems.filter(item => item.startsWith('quiz-')).length;
            
            document.getElementById('progress-text').textContent = `${completedCount}/${totalItems} Item`;
            document.getElementById('progress-bar').style.width = percentage + '%';
            document.getElementById('overall-progress').textContent = `${percentage}% Selesai`;
            document.getElementById('sidebar-progress-bar').style.width = percentage + '%';
            document.getElementById('material-progress').textContent = `${materialCount}/4`;
            document.getElementById('quiz-progress').textContent = `${quizCount}/4`;
        }

        function showSuccessModal(type, id) {
            const titles = {
                'material-servant-leadership': 'Materi Servant Leadership Selesai!',
                'quiz-servant-leadership': 'Kuis Servant Leadership Selesai!',
                'material-priority-delegate-manage': 'Materi Priority & Management Selesai!',
                'quiz-priority-delegate-manage': 'Kuis Priority & Management Selesai!'
            };
            
            const descriptions = {
                'material-servant-leadership': 'Anda telah berhasil mengakses materi Servant Leadership. Kuis tersedia kapan saja Anda siap.',
                'quiz-servant-leadership': 'Anda telah menyelesaikan kuis Servant Leadership. Materi selanjutnya akan segera terbuka.',
                'material-priority-delegate-manage': 'Anda telah berhasil mengakses materi Priority & Management. Lanjutkan dengan mengerjakan kuis.',
                'quiz-priority-delegate-manage': 'Anda telah menyelesaikan kuis Priority & Management. Materi selanjutnya akan segera terbuka.'
            };
            
            const key = type + '-' + id;
            document.getElementById('success-title').textContent = titles[key] || 'Selamat!';
            document.getElementById('success-description').textContent = descriptions[key] || 'Anda telah menyelesaikan item pembelajaran.';
            document.getElementById('success-modal').classList.remove('hidden');
        }

        function closeSuccessModal() {
            document.getElementById('success-modal').classList.add('hidden');
        }

        // Close modals when clicking outside
        document.getElementById('external-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        document.getElementById('quiz-prompt-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeQuizPrompt();
            }
        });

        document.getElementById('success-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSuccessModal();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
                closeQuizPrompt();
                closeSuccessModal();
            }
        });

        // Reset progress function (for testing)
        function resetProgress() {
            if (confirm('Apakah Anda yakin ingin mereset semua progress?')) {
                localStorage.removeItem('completedItems');
                completedItems = [];
                location.reload();
            }
        }
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9747ed6a1071448f',t:'MTc1NjA5MTc1Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
@endverbatim
