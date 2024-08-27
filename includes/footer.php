<?php
$socialMediaLinks = [
    ['name' => 'Twitter', 'url'=> 'https://twitter.com/icemalta', 'icon'=>'bi-twitter-x'],
    ['name' => 'Instagram', 'url'=> 'https://www.instagram.com/icemalta', 'icon'=>'bi-instagram'],
    ['name' => 'Facebook', 'url'=> 'https://www.facebook.com/icemalta/', 'icon'=>'bi-facebook']
];
?>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="https://icemalta.com" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <i class="bi-rocket-takeoff" style="font-size: 1.5rem;"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">©
                <?= date('Y') ?> ICE Malta
            </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <?php
            $scriptName = $_SERVER['SCRIPT_NAME'];
            foreach ($socialMediaLinks as $socialMediaLink) {
                $isActive = $menuItem['url'] === $scriptName ? 'active' : '';
                echo <<<ITEM
                    <li class="ms-3">
                        <a class="text-body-secondary $isActive" href="{$socialMediaLink['url']}"><i class="{$socialMediaLink['icon']}" style="font-size: 1.5rem;"></i></a>
                    </li>
                ITEM;
            }
            ?>
        </ul>
    </footer>
</div>