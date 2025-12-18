<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<style>
    .shadow-around {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    }
</style>

<body>
    <header class="p-5 border-b border-gray-300 shadow-md place-content-between flex">
        <div class="icon flex">
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="43" height="43" rx="8" fill="#4F46E5" />
                <rect x="7.5" y="12.5" width="10" height="10" rx="5" fill="#4F46E5" stroke="white" stroke-width="3" />
                <path d="M8 28.7142L11.6364 30.9999" stroke="white" stroke-width="3" stroke-linecap="round" />
                <path d="M18 27L11.6364 31" stroke="white" stroke-width="3" stroke-linecap="round" />
                <path d="M33 13L23 13" stroke="white" stroke-width="3" stroke-linecap="round" />
                <path d="M33 21L23 21" stroke="white" stroke-width="3" stroke-linecap="round" />
                <path d="M33 29L23 29" stroke="white" stroke-width="3" stroke-linecap="round" />
            </svg>
            <div class="text flex-col ml-3">
                <p class="font-bold">Daftar Tugas</p>
                <p class="text-[#808080]">Selamat Datang Nuis!</p>
            </div>
        </div>
        <div class="exit flex items-center gap-4">
            <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 13.4193C5.67157 13.4193 5 14.0909 5 14.9193C5 15.7477 5.67157 16.4193 6.5 16.4193V14.9193V13.4193ZM29.5607 15.98C30.1464 15.3942 30.1464 14.4444 29.5607 13.8587L20.0147 4.31271C19.4289 3.72692 18.4792 3.72692 17.8934 4.31271C17.3076 4.8985 17.3076 5.84824 17.8934 6.43403L26.3787 14.9193L17.8934 23.4046C17.3076 23.9904 17.3076 24.9401 17.8934 25.5259C18.4792 26.1117 19.4289 26.1117 20.0147 25.5259L29.5607 15.98ZM6.5 14.9193V16.4193L28.5 16.4193V14.9193V13.4193L6.5 13.4193V14.9193Z" fill="#808080" />
                <path d="M9.68852 27.5L4.5 27.5C2.84315 27.5 1.5 26.1569 1.5 24.5L1.5 4.5C1.5 2.84315 2.84315 1.5 4.5 1.5L10.5 1.5" stroke="#808080" stroke-width="3" stroke-linecap="round" />
            </svg>
            <div>
                <button class="text-[#808080]">Keluar</button>
            </div>
        </div>
    </header>
    <div class="h-auto min-h-screen bg-[#EEF4F8]">
        <div class="cards pt-10 gap-3 md:gap-6 lg:gap-12 justify-center items-center w-full flex flex-col md:flex-row">
            <div class="card rounded-2xl w-[95%] lg:ml-12 h-25 shadow-around bg-white">
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <p class="font-light text-lg">Total Tugas</p>
                        <p class="text-2xl font-bold mt-2">5</p>
                    </div>
                    <div>
                        <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="43" height="43" rx="8" fill="#C4E2FF" />
                            <rect x="7.5" y="12.5" width="10" height="10" rx="5" fill="#C4E2FF" stroke="white" stroke-width="3" />
                            <path d="M8 28.7142L11.6364 30.9999" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M18 27L11.6364 31" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M33 13L23 13" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M33 21L23 21" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M33 29L23 29" stroke="white" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card rounded-2xl w-[95%] h-25 shadow-around bg-white">
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <p class="font-light text-lg">Aktif</p>
                        <p class="text-2xl font-bold mt-2">5</p>
                    </div>
                    <div>
                        <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="43" height="43" rx="8" fill="#FFECB9" />
                            <circle cx="21.5" cy="21.5" r="14" stroke="#FF0000" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card rounded-2xl w-[95%] lg:mr-12 h-25 shadow-around bg-white">
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <p class="font-light text-lg">Selesai</p>
                        <p class="text-2xl font-bold mt-2">0</p>
                    </div>
                    <div>
                        <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="43" height="43" rx="8" fill="#D4FFD6" />
                            <path d="M14 22L18.5 26.5L29 16" stroke="#00A000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-menu justify-center flex w-full">
            <div class="mt-10 mb-5 h-18 w-[95%] rounded-2xl bg-white flex items-center px-5 shadow-around">
                <p class="font-bold text-2xl">Daftar Tugas</p>
            </div>
        </div>
    </div>
</body>

</html>