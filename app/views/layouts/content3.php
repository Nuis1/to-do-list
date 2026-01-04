<?php
require_once '../app/core/database.php';
require_once '../app/controllers/TugasController.php';

if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit;
}

$timeout = 3600; // 1 jam
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: /login");
    exit;
}
$_SESSION['last_activity'] = time();

$id_user = $_SESSION['user']['id'];

$controller = new TugasController($conn);
$id_user = $_SESSION['user']['id'];
$tugasList = $controller->index('Selesai', $id_user);


if (empty($tugasList)) {
    echo '<div class="bg-white shadow-sm hover:shadow-md duration-200 ease-in-out rounded-lg md:rounded-2xl p-4 md:p-5 text-center">
        <div class="flex flex-col items-center">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="56" height="56" rx="28" fill="#F2F2F2"/>
            <rect x="12.5" y="16.5" width="13" height="13" rx="6.5" fill="#F2F2F2" stroke="#CCCCCC" stroke-width="3"/>
            <path d="M13.3354 37.1429L17.8809 40" stroke="#CCCCCC" stroke-width="3" stroke-linecap="round"/>
            <path d="M25.8354 35L17.8809 40" stroke="#CCCCCC" stroke-width="3" stroke-linecap="round"/>
            <path d="M45 18L33 18" stroke="#CCCCCC" stroke-width="3" stroke-linecap="round"/>
            <path d="M45 27L33 27" stroke="#CCCCCC" stroke-width="3" stroke-linecap="round"/>
            <path d="M45 37H33" stroke="#CCCCCC" stroke-width="3" stroke-linecap="round"/>
            </svg>
            <p class="text-gray-500 text-lg">Belum ada tugas</p>
            <p class="text-gray-500 text-lg">Belum ada tugas yang diselesaikan</p>
        </div>
    </div>';
} else {

?>

<?php foreach ($tugasList as $tugas): ?>
    <div class="bg-white shadow-sm hover:shadow-md duration-200 ease-in-out border-l-4 md:border-l-6 <?= $tugas['meta']['border'] ?> rounded-lg md:rounded-2xl p-4 md:p-5">
        <div class="flex flex-col sm:flex-row sm:justify-between gap-4">
            <div class="flex gap-3 md:gap-4 flex-1">
                <!-- Status Icon -->
                <div onclick="toggleStatus(<?= $tugas['id_tugas'] ?>)" class="cursor-pointer flex-shrink-0">
                    <?php if (strtolower($tugas['status']) === 'selesai'): ?>
                        <svg width="30" height="30" viewBox="0 0 30 30" class="w-6 h-6 md:w-8 md:h-8">
                            <circle cx="15" cy="15" r="15" fill="#00AF69" />
                            <path d="M6 14.3L12.6 20" stroke="white" stroke-width="2" stroke-linecap="round" />
                            <path d="M24 10L12.6 20" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    <?php else: ?>
                        <div class="w-6 h-6 md:w-8 md:h-8 border-2 border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors"></div>
                    <?php endif; ?>
                </div>

                <div class="flex-1 min-w-0">
                    <p class="font-medium text-base md:text-lg mb-1 <?= strtolower($tugas['status']) === 'selesai' ? 'line-through text-gray-400' : '' ?>">
                        <?= htmlspecialchars($tugas['judul']) ?>
                    </p>
                    <p class="text-sm md:text-base text-gray-500 line-clamp-2 <?= strtolower($tugas['status']) === 'selesai' ? 'line-through' : '' ?>">
                        <?= htmlspecialchars($tugas['deskripsi']) ?>
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 md:gap-6 mt-3 md:mt-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11V20C22 21.1046 21.1046 22 20 22H3C1.89543 22 1 21.1046 1 20V11H22Z" stroke="#808080" stroke-width="2" />
                                <mask id="path-2-inside-1" fill="white">
                                    <path d="M0 6C0 4.34315 1.34315 3 3 3H20C21.6569 3 23 4.34315 23 6V10H0V6Z" />
                                </mask>
                                <path d="M-2 6C-2 3.23858 0.238576 1 3 1H20C22.7614 1 25 3.23858 25 6H21C21 5.44772 20.5523 5 20 5H3C2.44772 5 2 5.44772 2 6H-2ZM23 10H0H23ZM-2 10V6C-2 3.23858 0.238576 1 3 1V5C2.44772 5 2 5.44772 2 6V10H-2ZM20 1C22.7614 1 25 3.23858 25 6V10H21V6C21 5.44772 20.5523 5 20 5V1Z" fill="#808080" mask="url(#path-2-inside-1)" />
                                <line x1="8" y1="1" x2="8" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                                <line x1="15" y1="1" x2="15" y2="6" stroke="#808080" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <p class="text-sm md:text-base text-gray-500"><?= date('d F Y', strtotime($tugas['tanggal_tenggat'])) ?></p>
                        </div>
                        <?php if ($tugas['meta']['info']): ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="11.5" fill="white" stroke="<?= $tugas['meta']['label'] === 'Aktif' ? '#808080' : '#FF0000' ?>" />
                                    <path d="M12.2475 4.75251C12.1108 4.61583 11.8892 4.61583 11.7525 4.75251L9.52513 6.9799C9.38844 7.11658 9.38844 7.33819 9.52513 7.47487C9.66181 7.61156 9.88342 7.61156 10.0201 7.47487L12 5.49497L13.9799 7.47487C14.1166 7.61156 14.3382 7.61156 14.4749 7.47487C14.6116 7.33819 14.6116 7.11658 14.4749 6.9799L12.2475 4.75251ZM12 13L12.35 13L12.35 5L12 5L11.65 5L11.65 13L12 13Z" fill="<?= $tugas['meta']['label'] === 'Aktif' ? '#808080' : '#FF0000' ?>" />
                                    <path d="M18.0686 17.3432C18.2582 17.3053 18.3811 17.1209 18.3432 16.9314L17.7254 13.8425C17.6875 13.653 17.5031 13.5301 17.3136 13.568C17.124 13.6059 17.0011 13.7903 17.039 13.9798L17.5882 16.7254L14.8425 17.2746C14.653 17.3125 14.5301 17.4969 14.568 17.6864C14.6059 17.876 14.7903 17.9989 14.9798 17.961L18.0686 17.3432ZM12 13L11.8059 13.2912L17.8059 17.2912L18 17L18.1941 16.7088L12.1941 12.7088L12 13Z" fill="<?= $tugas['meta']['label'] === 'Aktif' ? '#808080' : '#FF0000' ?>" />
                                </svg>
                                <p class="text-sm md:text-base <?= strpos($tugas['meta']['label'], 'Terlambat') !== false ? 'text-red-600' : 'text-blue-600' ?>">
                                    <?= $tugas['meta']['info'] ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="flex sm:flex-col justify-between sm:justify-end items-center sm:items-end gap-3">
                <div class="<?= $tugas['meta']['badge'] ?> py-1 px-3 rounded-full text-sm whitespace-nowrap">
                    <?= $tugas['meta']['label'] ?>
                </div>
                <div class="flex gap-2 md:gap-4">
                    <button onclick="openEditModal(<?= $tugas['id_tugas'] ?>, '<?= htmlspecialchars($tugas['judul'], ENT_QUOTES) ?>', '<?= htmlspecialchars($tugas['deskripsi'], ENT_QUOTES) ?>', '<?= $tugas['tanggal_tenggat'] ?>')" class="cursor-pointer h-9 w-9 md:h-10 md:w-10 flex justify-center items-center hover:bg-gray-200 rounded duration-200 ease-in-out">
                        <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 17.25V21H6.75L17.81 9.93999L14.06 6.18999L3 17.25Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.71 7.04004C21.1 6.65004 21.1 6.02004 20.71 5.63004L18.37 3.29004C17.98 2.90004 17.35 2.90004 16.96 3.29004L15.13 5.12004L18.88 8.87004L20.71 7.04004Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <a href="/delete?id=<?= $tugas['id_tugas'] ?>"
                        onclick="return confirm('Yakin ingin menghapus tugas ini?')">
                        <button class="cursor-pointer h-9 w-9 md:h-10 md:w-10 flex justify-center items-center hover:bg-red-200 rounded duration-200 ease-in-out">
                            <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0.5H15C16.3807 0.5 17.5 1.61929 17.5 3V5.5H6.5V3C6.5 1.61929 7.61929 0.5 9 0.5Z" stroke="#C00000" />
                                <path d="M19.25 5.75V17C19.25 19.3472 17.3472 21.25 15 21.25H9C6.65279 21.25 4.75 19.3472 4.75 17V5.75H19.25Z" stroke="#C80000" stroke-width="1.5" />
                                <line x1="9.5" y1="8.5" x2="9.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                <line x1="14.5" y1="8.5" x2="14.5" y2="16.5" stroke="#C00000" stroke-linecap="round" />
                                <line y1="5.25" x2="24" y2="5.25" stroke="#C80000" stroke-width="1.5" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; 
}
?>