<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
    <script src="/public/index.js"></script>
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
                        <p class="text-2xl font-bold mt-2">4</p>
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
                        <p class="text-2xl font-bold mt-2">1</p>
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
            <div class="mt-10 mb-5 h-auto py-2 w-[94%] rounded-2xl bg-white flex flex-col md:flex-row items-start px-5 shadow-around justify-between">
                <div class="buttons flex mb-2 md:mb-0">
                    <div class="button items-center justify-center">
                        <div class="bg-[#4F46E5] text-white px-4 py-2 rounded-lg font-medium cursor-pointer" onclick="buttonActive('content1')">Semua</div>
                    </div>
                    <div class="button items-center justify-center ml-6">
                        <div class="text-black bg-[#EDEDED] px-4 py-2 rounded-lg font-medium cursor-pointer" onclick="buttonActive('content2')">Aktif</div>
                    </div>
                    <div class="button items-center justify-center ml-6">
                        <div class="text-black bg-[#EDEDED] px-4 py-2 rounded-lg font-medium cursor-pointer" onclick="buttonActive('content3')">Selesai</div>
                    </div>
                </div>
                <div class="add-task">
                    <button class="bg-[#4F46E5] text-white px-4 py-2 rounded-lg font-medium">+ Tambah Tugas</button>
                </div>
            </div>
        </div>
        <div class="cards" id="display-content">
            <div class="task-card bg-white w-[94%] lg:ml-12 mb-6 shadow-sm hover:shadow-md duration-200 ease-in-out border-s-6 border-red-600 rounded-2xl p-5">
                <div class="flex justify-between items-center">
                    <div class="circle flex gap-4">
                        <div class="w-6 h-6 border-2 border-[#4F46E5] rounded-full"></div>
                        <div>
                            <p class="font-medium text-lg">Tugas 1</p>
                            <p class="text-lg text-[#808080]">Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                            <div class="flex gap-6">
                                <div class="deadline flex items-center gap-2 mt-4">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11V20C22 21.1046 21.1046 22 20 22H3C1.89543 22 1 21.1046 1 20V11H22Z" stroke="#808080" stroke-width="2" />
                                        <mask id="path-2-inside-1_130_222" fill="white">
                                            <path d="M0 6C0 4.34315 1.34315 3 3 3H20C21.6569 3 23 4.34315 23 6V10H0V6Z" />
                                        </mask>
                                        <path d="M-2 6C-2 3.23858 0.238576 1 3 1H20C22.7614 1 25 3.23858 25 6H21C21 5.44772 20.5523 5 20 5H3C2.44772 5 2 5.44772 2 6H-2ZM23 10H0H23ZM-2 10V6C-2 3.23858 0.238576 1 3 1V5C2.44772 5 2 5.44772 2 6V10H-2ZM20 1C22.7614 1 25 3.23858 25 6V10H21V6C21 5.44772 20.5523 5 20 5V1Z" fill="#808080" mask="url(#path-2-inside-1_130_222)" />
                                        <line x1="8" y1="1" x2="8" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                                        <line x1="15" y1="1" x2="15" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    <p class="text-[#808080]">10 Desember 2025</p>
                                </div>
                                <div class="sisa-waktu flex items-center gap-2 mt-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="11.5" fill="white" stroke="#FF0000" />
                                        <path d="M12.2475 4.75251C12.1108 4.61583 11.8892 4.61583 11.7525 4.75251L9.52513 6.9799C9.38844 7.11658 9.38844 7.33819 9.52513 7.47487C9.66181 7.61156 9.88342 7.61156 10.0201 7.47487L12 5.49497L13.9799 7.47487C14.1166 7.61156 14.3382 7.61156 14.4749 7.47487C14.6116 7.33819 14.6116 7.11658 14.4749 6.9799L12.2475 4.75251ZM12 13L12.35 13L12.35 5L12 5L11.65 5L11.65 13L12 13Z" fill="#FF0000" />
                                        <path d="M18.0686 17.3432C18.2582 17.3053 18.3811 17.1209 18.3432 16.9314L17.7254 13.8425C17.6875 13.653 17.5031 13.5301 17.3136 13.568C17.124 13.6059 17.0011 13.7903 17.039 13.9798L17.5882 16.7254L14.8425 17.2746C14.653 17.3125 14.5301 17.4969 14.568 17.6864C14.6059 17.876 14.7903 17.9989 14.9798 17.961L18.0686 17.3432ZM12 13L11.8059 13.2912L17.8059 17.2912L18 17L18.1941 16.7088L12.1941 12.7088L12 13Z" fill="#FF0000" />
                                    </svg>
                                    <p class="text-[#FF0000]">Terlambat 5 hari</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-24 flex content-end">
                        <div class="flex items-end">
                            <div class="status bg-[#FFCECE] py-1 px-3 rounded-full text-red-800">Terlambat</div>
                        </div>
                        <div class="flex ml-4 gap-4 mt-2">
                            <div class="edit cursor-pointer h-10 w-10 flex justify-center items-center hover:bg-gray-200 rounded duration-200 ease-in-out">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 17.25V21H6.75L17.81 9.93999L14.06 6.18999L3 17.25Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.71 7.04004C21.1 6.65004 21.1 6.02004 20.71 5.63004L18.37 3.29004C17.98 2.90004 17.35 2.90004 16.96 3.29004L15.13 5.12004L18.88 8.87004L20.71 7.04004Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="delete cursor-pointer h-10 w-10 flex justify-center items-center hover:bg-red-200 rounded duration-200 ease-in-out">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 0.5H15C16.3807 0.5 17.5 1.61929 17.5 3V5.5H6.5V3C6.5 1.61929 7.61929 0.5 9 0.5Z" stroke="#C00000" />
                                    <path d="M19.25 5.75V17C19.25 19.3472 17.3472 21.25 15 21.25H9C6.65279 21.25 4.75 19.3472 4.75 17V5.75H19.25Z" stroke="#C80000" stroke-width="1.5" />
                                    <line x1="9.5" y1="8.5" x2="9.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                    <line x1="14.5" y1="8.5" x2="14.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                    <line y1="5.25" x2="24" y2="5.25" stroke="#C80000" stroke-width="1.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="task-card bg-white w-[94%] lg:ml-12 mb-6 shadow-sm hover:shadow-md duration-200 ease-in-out border-s-6 border-red-600 rounded-2xl p-5">
                <div class="flex justify-between items-center">
                    <div class="circle flex gap-4">
                        <div class="w-6 h-6 border-2 border-[#4F46E5] rounded-full"></div>
                        <div>
                            <p class="font-medium text-lg">Tugas 1</p>
                            <p class="text-lg text-[#808080]">Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                            <div class="flex gap-6">
                                <div class="deadline flex items-center gap-2 mt-4">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11V20C22 21.1046 21.1046 22 20 22H3C1.89543 22 1 21.1046 1 20V11H22Z" stroke="#808080" stroke-width="2" />
                                        <mask id="path-2-inside-1_130_222" fill="white">
                                            <path d="M0 6C0 4.34315 1.34315 3 3 3H20C21.6569 3 23 4.34315 23 6V10H0V6Z" />
                                        </mask>
                                        <path d="M-2 6C-2 3.23858 0.238576 1 3 1H20C22.7614 1 25 3.23858 25 6H21C21 5.44772 20.5523 5 20 5H3C2.44772 5 2 5.44772 2 6H-2ZM23 10H0H23ZM-2 10V6C-2 3.23858 0.238576 1 3 1V5C2.44772 5 2 5.44772 2 6V10H-2ZM20 1C22.7614 1 25 3.23858 25 6V10H21V6C21 5.44772 20.5523 5 20 5V1Z" fill="#808080" mask="url(#path-2-inside-1_130_222)" />
                                        <line x1="8" y1="1" x2="8" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                                        <line x1="15" y1="1" x2="15" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    <p class="text-[#808080]">10 Desember 2025</p>
                                </div>
                                <div class="sisa-waktu flex items-center gap-2 mt-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="11.5" fill="white" stroke="#FF0000" />
                                        <path d="M12.2475 4.75251C12.1108 4.61583 11.8892 4.61583 11.7525 4.75251L9.52513 6.9799C9.38844 7.11658 9.38844 7.33819 9.52513 7.47487C9.66181 7.61156 9.88342 7.61156 10.0201 7.47487L12 5.49497L13.9799 7.47487C14.1166 7.61156 14.3382 7.61156 14.4749 7.47487C14.6116 7.33819 14.6116 7.11658 14.4749 6.9799L12.2475 4.75251ZM12 13L12.35 13L12.35 5L12 5L11.65 5L11.65 13L12 13Z" fill="#FF0000" />
                                        <path d="M18.0686 17.3432C18.2582 17.3053 18.3811 17.1209 18.3432 16.9314L17.7254 13.8425C17.6875 13.653 17.5031 13.5301 17.3136 13.568C17.124 13.6059 17.0011 13.7903 17.039 13.9798L17.5882 16.7254L14.8425 17.2746C14.653 17.3125 14.5301 17.4969 14.568 17.6864C14.6059 17.876 14.7903 17.9989 14.9798 17.961L18.0686 17.3432ZM12 13L11.8059 13.2912L17.8059 17.2912L18 17L18.1941 16.7088L12.1941 12.7088L12 13Z" fill="#FF0000" />
                                    </svg>
                                    <p class="text-[#FF0000]">Terlambat 5 hari</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-24 flex content-end">
                        <div class="flex items-end">
                            <div class="status bg-[#FFCECE] py-1 px-3 rounded-full text-red-800">Terlambat</div>
                        </div>
                        <div class="flex ml-4 gap-4 mt-2">
                            <div class="edit cursor-pointer h-10 w-10 flex justify-center items-center hover:bg-gray-200 rounded duration-200 ease-in-out">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 17.25V21H6.75L17.81 9.93999L14.06 6.18999L3 17.25Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.71 7.04004C21.1 6.65004 21.1 6.02004 20.71 5.63004L18.37 3.29004C17.98 2.90004 17.35 2.90004 16.96 3.29004L15.13 5.12004L18.88 8.87004L20.71 7.04004Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="delete cursor-pointer h-10 w-10 flex justify-center items-center hover:bg-red-200 rounded duration-200 ease-in-out">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 0.5H15C16.3807 0.5 17.5 1.61929 17.5 3V5.5H6.5V3C6.5 1.61929 7.61929 0.5 9 0.5Z" stroke="#C00000" />
                                    <path d="M19.25 5.75V17C19.25 19.3472 17.3472 21.25 15 21.25H9C6.65279 21.25 4.75 19.3472 4.75 17V5.75H19.25Z" stroke="#C80000" stroke-width="1.5" />
                                    <line x1="9.5" y1="8.5" x2="9.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                    <line x1="14.5" y1="8.5" x2="14.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                    <line y1="5.25" x2="24" y2="5.25" stroke="#C80000" stroke-width="1.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>