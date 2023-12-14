<!doctype html>
<html lang="en">

<?= view('Admin/chop/head') ?>

<style>

</style>

<body>
    <?= view('Admin/chop/header') ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/AdDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown"
                                aria-expanded="false">
                                <i class="bi-wallet me-2"></i>
                                Manage
                            </a>
                            <div class="collapse" id="manageDropdown">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/ManageAgent">
                                            <i class="bi-person me-2"></i>
                                            <span class="align-middle">Agents</span>
                                        </a><br>
                                        <a class="nav-link" href="ManageApplicant">
                                            <i class="bi-person me-2"></i>
                                            <span class="align-middle">Applicants</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/RTC">
                                <i class="bi-envelope me-2"></i>
                                Chat
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdHelp">
                                <i class="bi-question-circle me-2"></i>
                                Help Center
                            </a>
                        </li>

                        <li class="nav-item border-top mt-auto pt-2">
                            <a class="nav-link" href="/logout">
                                <i class="bi-box-arrow-left me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-wrapper col-md-10 ms-sm-auto py-2 col-lg-9 px-md-4 border-start">
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row container d-flex justify-content-center">
                            <div class="col-md-4">
                                <div class="box box-warning direct-chat direct-chat-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Chat Messages</h3>

                                        <div class="box-tools pull-right">
                                            <span data-toggle="tooltip" title="" class="badge bg-yellow"
                                                data-original-title="3 New Messages">20</span>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                    class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-toggle="tooltip"
                                                title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                                                <i class="fa fa-comments"></i></button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                    class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="direct-chat-messages">
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-left">Timona Siera</span>
                                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                                </div>
                                                <img class="direct-chat-img"
                                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                                    alt="message user image">
                                                <div class="direct-chat-text">
                                                    For what reason would it be advisable for me to think about business
                                                    content?
                                                </div>
                                            </div>
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                                </div>
                                                <img class="direct-chat-img"
                                                    src="https://img.icons8.com/office/36/000000/person-female.png"
                                                    alt="message user image">
                                                <div class="direct-chat-text">
                                                    Thank you for your believe in our supports
                                                </div>
                                            </div>

                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-left">Timona Siera</span>
                                                    <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                                                </div>
                                                <img class="direct-chat-img"
                                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                                    alt="message user image">
                                                <div class="direct-chat-text">
                                                    For what reason would it be advisable for me to think about business
                                                    content?
                                                </div>
                                            </div>
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                                    <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                                                </div>
                                                <img class="direct-chat-img"
                                                    src="https://img.icons8.com/office/36/000000/person-female.png"
                                                    alt="message user image">
                                                <div class="direct-chat-text">
                                                    I would love to.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" name="message" placeholder="Type Message ..."
                                                    class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-warning btn-flat">Send</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <?= view('Admin/chop/js') ?>
</body>

</html>