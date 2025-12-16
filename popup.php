<?php
// Popup gösterim tarihi değişkeni
$showUntilDate = '2026-01-18 23:59:59'; // Bu tarihe kadar gösterilecek, boş bırakılırsa süresiz gösterilir
$showPopup = true;

// Eğer tarih parametresi varsa ve geçmişse popup gösterilmeyecek
if (!empty($showUntilDate)) {
    $currentTime = time();
    $untilTime = strtotime($showUntilDate);
    
    if ($currentTime > $untilTime) {
        $showPopup = false;
    }
}

// Popup sadece gösterilmesi gerekiyorsa gösterilecek
if ($showPopup) {
?>
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close style="z-index: 999;">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">

                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>

                <main class="modal__content" id="modal-1-content">
                        <img alt="" src="/doc/2026-secim-genel-kurulu.jpg">
                </main>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

    <script>
        MicroModal.init({
            onShow: modal => console.info(`${modal.id} is shown`), // [1]
            onClose: modal => console.info(`${modal.id} is hidden`), // [2]
            // openTrigger: 'data-custom-open', // [3]
            closeTrigger: 'data-custom-close', // [4]
            openClass: 'is-open', // [5]
            disableScroll: true, // [6]
            disableFocus: false, // [7]
            awaitOpenAnimation: false, // [8]
            awaitCloseAnimation: false, // [9]
            debugMode: false // [10]
        });
        MicroModal.show('modal-1');
    </script>
    <link rel="stylesheet" href="css/modal.css?v=2">
<?php
}
?>