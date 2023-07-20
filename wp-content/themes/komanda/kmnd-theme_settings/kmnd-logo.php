<?php
/***
 * custom login page
 * 
 */  
add_action( 'login_enqueue_scripts', 'kmnd_login_enqueue_scripts' );
function kmnd_login_enqueue_scripts(){
    wp_enqueue_style('kmnd_normalize',get_theme_file_uri('/kmnd-theme_settings/assets/css/normalize.min.css'));
    wp_enqueue_style('kmnd_grid',get_theme_file_uri('/kmnd-theme_settings/assets/css/grid.css'));
    wp_enqueue_style('kmnd_style',get_theme_file_uri('/kmnd-theme_settings/assets/css/style.css'));
}

add_action( 'login_header', 'kmnd_login_header' );
function kmnd_login_header(){
        echo '<div class="kmnd-auth">
                <div class="kmnd-header">
                    <div class="container">
                        <a target="_blank" href="https://komanda.dev/" class="kmnd-logo">
                            <svg width="110" height="11" viewBox="0 0 110 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10.582V.182h4.143v3.872L7.987.182h4.743L8.028 4.85l5.097 5.731h-5.18L4.144 6.11v4.473H0zM20.743 0c.963 0 1.799.08 2.507.238.718.158 1.327.372 1.827.643.5.26.908.563 1.226.908.318.345.564.709.736 1.09a4.3 4.3 0 01.368 1.16c.073.392.11.76.11 1.105v.42c0 .344-.032.713-.096 1.104a4.517 4.517 0 01-.368 1.16c-.182.382-.432.75-.75 1.105a4.512 4.512 0 01-1.226.936c-.5.27-1.109.49-1.827.657-.708.159-1.544.238-2.507.238h-.627c-.963 0-1.8-.08-2.508-.238-.7-.168-1.304-.387-1.813-.657-.5-.27-.909-.582-1.226-.936a4.642 4.642 0 01-.75-1.105 5.353 5.353 0 01-.368-1.16 6.903 6.903 0 01-.096-1.104v-.42c0-.345.032-.713.096-1.104.073-.392.2-.778.381-1.16.182-.382.432-.746.75-1.09A4.447 4.447 0 0115.81.88c.5-.27 1.1-.484 1.799-.642C18.317.079 19.152 0 20.116 0h.627zm2.412 5.256a2.82 2.82 0 00-.095-.685 1.625 1.625 0 00-.368-.713c-.191-.223-.468-.41-.832-.559-.354-.15-.831-.224-1.43-.224-.61 0-1.096.075-1.46.224-.354.15-.626.336-.817.56-.19.223-.313.46-.368.712-.055.252-.082.48-.082.685v.14c0 .214.032.452.096.713.063.26.19.503.381.727.191.223.464.414.818.573.363.149.845.223 1.445.223.6 0 1.076-.074 1.43-.223.355-.159.628-.35.819-.573.19-.224.313-.466.368-.727.063-.261.095-.499.095-.713v-.14zM29.926.182h5.806L38.2 5.508 40.694.182h5.615v10.4H42.22V4.264l-2.957 6.318h-2.386l-2.944-6.318v6.318h-4.007V.182zM55.322 3.257l-1.404 3.16h2.794l-1.39-3.16zm2.549 5.774H52.76l-.695 1.551h-4.157l4.81-10.4h5.384l4.866 10.4h-4.402l-.695-1.551zM68.625 4.99v5.592h-4.061V.182h4.225l5.207 5.326V.182h4.061v10.4h-3.966l-5.466-5.591zM80.925.182h6.392c1.418 0 2.576.144 3.476.433.9.28 1.603.653 2.112 1.119.509.456.854.983 1.036 1.58.19.596.286 1.201.286 1.816v.42c0 .41-.04.82-.123 1.23-.072.41-.209.801-.409 1.174-.19.373-.454.722-.79 1.049-.336.316-.763.591-1.281.824-.509.233-1.118.42-1.826.56-.71.13-1.536.195-2.481.195h-6.392V.182zm4.157 7.52h1.622c.708 0 1.272-.074 1.69-.223.418-.15.736-.336.954-.56a1.57 1.57 0 00.422-.74c.064-.27.096-.531.096-.783v-.084c0-.233-.032-.48-.096-.74a1.57 1.57 0 00-.422-.742c-.218-.223-.536-.41-.954-.559-.418-.149-.982-.223-1.69-.223h-1.622v4.655zM102.354 3.257l-1.404 3.16h2.794l-1.39-3.16zm2.548 5.774h-5.11l-.696 1.551H94.94l4.812-10.4h5.383l4.866 10.4h-4.402l-.696-1.551z" fill="#fff"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <div class="kmnd-form">
                <div class="container">';
}

function kmnd_login_footer(){
    $kmnd_login_nead_help = 'Потрібна допомога з цим або якимось іншим сайтом? Звертайтесь:';
    $kmnd_login_creat_site = 'Сайт створила Команда';
    if( get_user_locale() == 'ru_RU' ){
        $kmnd_login_nead_help = 'Нужна помощь с этим или иным сайтом? обращайтесь:';
        $kmnd_login_creat_site = 'Сайт создала Команда';
    }
    echo '</div>
        </div>
        <div class="kmnd-footer"> 
            <div class="container">
                <hr>
                <div class="kmnd-footer-row">
                    <div class="kmnd-footer-col-lg">
                        <p class="kmnd-footer-title">'.$kmnd_login_nead_help.'</p>
                        <div class="kmnd-soc">
                            <a target="_blank" href="https://t.me/sergeyivanovj"><span>Telegram</span></a>
                            <a target="_blank" href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F100003668961546%2F"><span>Facebook Messenger</span></a>
                            <a href="mailto:sergeyivanovj@gmail.com"><span>sergeyivanovj@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="kmnd-footer-col-sm">
                        <p class="kmnd-copy-text">'.$kmnd_login_creat_site.'</p>
                        <p class="kmnd-copy-link"><a target="_blank" href="https://komanda.dev/">komanda.dev</a></p>
                    </div>
                </div>
            </div>
        </div>';
}
add_action( 'login_footer', 'kmnd_login_footer' );
