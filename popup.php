<?php
// İlk Popup - Prof. Dr. Bülent Kaya Vefat Duyurusu
$showUntilDate1 = '2026-01-20 23:59:59'; // Bu tarihe kadar gösterilecek
$showPopup1 = true;

if (!empty($showUntilDate1)) {
    $currentTime = time();
    $untilTime = strtotime($showUntilDate1);
    
    if ($currentTime > $untilTime) {
        $showPopup1 = false;
    }
}

// İkinci Popup - Genel Kurul Duyurusu
$showUntilDate2 = '2026-01-18 23:59:59'; // Bu tarihe kadar gösterilecek
$showPopup2 = true;

if (!empty($showUntilDate2)) {
    $currentTime = time();
    $untilTime = strtotime($showUntilDate2);
    
    if ($currentTime > $untilTime) {
        $showPopup2 = false;
    }
}

// İlk Popup - Vefat Duyurusu
if ($showPopup1) {
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
                        <img alt="Prof. Dr. Bülent Kaya Vefat Duyurusu" src="/doc/bulent-kaya-vefat-popup.jpeg">
                </main>

            </div>
        </div>
    </div>
<?php
}

// İkinci Popup - Genel Kurul Duyurusu
if ($showPopup2) {
?>
    <div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close style="z-index: 999;">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-2-title">

                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>

                <main class="modal__content" id="modal-2-content">
                        <img alt="Seçimli Genel Kurul Duyurusu" src="/doc/2026-secim-genel-kurulu.jpg">
                </main>

            </div>
        </div>
    </div>
<?php
}

// Her iki popup da gösterilecekse script ve stil dosyalarını ekle
if ($showPopup1 || $showPopup2) {
?>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

    <script>
        <?php if ($showPopup1 && $showPopup2) { ?>
        // Her iki popup da varsa ilk popup kapandığında ikinci popup'ı göster
        var modal1Closed = false;
        <?php } ?>
        
        MicroModal.init({
            onShow: modal => console.info(`${modal.id} is shown`),
            onClose: modal => {
                console.info(`${modal.id} is hidden`);
                <?php if ($showPopup1 && $showPopup2) { ?>
                // İlk popup kapandığında ikinci popup'ı göster
                if (modal.id === 'modal-1' && !modal1Closed) {
                    modal1Closed = true;
                    setTimeout(function() {
                        MicroModal.show('modal-2');
                    }, 400);
                }
                <?php } ?>
            },
            openClass: 'is-open',
            disableScroll: true,
            disableFocus: false,
            awaitOpenAnimation: false,
            awaitCloseAnimation: false,
            debugMode: false
        });
        
        <?php if ($showPopup1 && $showPopup2) { ?>
        // Manuel kapatma butonlarına event listener ekle
        document.addEventListener('DOMContentLoaded', function() {
            var modal1 = document.getElementById('modal-1');
            if (modal1) {
                var closeBtn = modal1.querySelector('.modal__close');
                var overlay = modal1.querySelector('.modal__overlay');
                
                if (closeBtn) {
                    closeBtn.addEventListener('click', function() {
                        if (!modal1Closed) {
                            modal1Closed = true;
                            setTimeout(function() {
                                MicroModal.show('modal-2');
                            }, 400);
                        }
                    });
                }
                
                if (overlay) {
                    overlay.addEventListener('click', function(e) {
                        if (e.target === overlay && !modal1Closed) {
                            modal1Closed = true;
                            setTimeout(function() {
                                MicroModal.show('modal-2');
                            }, 400);
                        }
                    });
                }
            }
        });
        <?php } ?>
        
        // İlk popup'ı göster
        <?php if ($showPopup1) { ?>
        MicroModal.show('modal-1');
        <?php } elseif ($showPopup2) { ?>
        // Eğer sadece ikinci popup varsa onu göster
        MicroModal.show('modal-2');
        <?php } ?>
    </script>
    <link rel="stylesheet" href="css/modal.css?v=2">
<?php
}
?>