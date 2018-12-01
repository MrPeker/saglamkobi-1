<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- Chat layout and demo functionality is initialized in js/pages/be_comp_chat.js -->
<!--
    You can use the following JS function to add a header message to a chat window:
    BeCompChat.addHeader(chatId, chatMsg)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the header message you would like to add

    You can use the following JS function to add a message to a chat window:
    BeCompChat.addMessage(chatId, chatMsg, chatMsgLevel)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the message you would like to add
    chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
-->
<div class="js-chat-container content content-full invisible" data-toggle="appear" data-chat-height="auto">
    <!-- Multiple Chat (auto height) -->
    <div class="block mb-0">
        <ul class="js-chat-head nav nav-tabs nav-tabs-alt bg-body-light" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#chat-window1">
                    <?php $cb->get_avatar('', 'male', 16); ?> <span class="ml-5">Ersan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#chat-window2">
                    <?php $cb->get_avatar('', 'female', 16); ?> <span class="ml-5">Başak</span>
                </a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#chat-people">
                    <i class="si si-users"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content overflow-hidden">
            <!-- Chat Window #1 -->
            <div class="tab-pane fade show active" id="chat-window1" role="tabpanel">
                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="1"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_multiple.php" method="post">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-comment text-primary"></i>
                                </span>
                            </div>
                            <input class="js-chat-input form-control" type="text" data-target-chat-id="1" placeholder="Lütfen Mesajınızı Giriniz...">
                        </div>
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Chat Window #1 -->

            <!-- Chat Window #2 -->
            <div class="tab-pane fade" id="chat-window2" role="tabpanel">
                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="2"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_multiple.php" method="post">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-comment text-primary"></i>
                                </span>
                            </div>
                            <input class="js-chat-input form-control" type="text" data-target-chat-id="2" placeholder="Lütfen Mesajınızı Giriniz...">
                        </div>
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Chat Window #2 -->

            <!-- People -->
            <div class="tab-pane fade fade-left" id="chat-people" role="tabpanel">
                <div class="js-chat-people block-content block-content-full overflow-y-auto bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-pattern-inverse.png');">
                    <div class="row mb-0">
                        <div class="col-md-4">
                            <h3 class="h1 font-w300 text-success">Online</h3>
                            <ul class="nav-users push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="h1 font-w300 text-warning">Away</h3>
                            <ul class="nav-users mt-10 push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="h1 font-w300 text-muted">Offline</h3>
                            <ul class="nav-users mt-10 push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END People -->
        </div>
    </div>
    <!-- END Multiple Chat (auto height) -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_chat.js'); ?>
<script>
    jQuery(function(){
        BeCompChat.addHeader(1, '5 Saat önce');
        BeCompChat.addMessage(1, 'Merhaba  Ersan');
        BeCompChat.addMessage(1, 'Ne istersin benden başak ?');
        BeCompChat.addMessage(1, 'Sence ?');
        BeCompChat.addHeader(1, '2 Saat önce');
        BeCompChat.addMessage(1, 'Sarılmak');
        BeCompChat.addMessage(1, 'Okey Lets Goooooooo');

        BeCompChat.addHeader(2, 'Dün');
        BeCompChat.addMessage(2, 'Merhaba Başak');
        BeCompChat.addMessage(2, 'Nasılsın?');
        BeCompChat.addHeader(2, 'Bugün');
        BeCompChat.addMessage(2, 'İyiyim');
        BeCompChat.addMessage(2, 'Sen Nasılsın');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>