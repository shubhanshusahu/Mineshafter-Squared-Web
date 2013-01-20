<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#">
                Mineshafter Squared
            </a>
            <ul class="nav">
                <li <?php if($active_menu == 'home') echo 'class="active"'; ?>>
                    <a href="/">
                        <i class="icon-home"></i>
                        Home
                    </a>
                </li>
                <li <?php if($active_menu == 'server_list') echo 'class="active"'; ?>>
                    <a href="/server_list">
                        <i class="icon-th-list"></i>
                        Server List
                    </a>
                </li>
                <li>
                    <a href="#" rel="popover" data-toggle="popover" data-placement="bottom" data-content="The skin/cape texture system is still in development. Just as the server list was revamped in a BIG way, you can look forward to a significant improvement over the previous texture system once it is finished." data-original-title="Not Available Yet">
                        <i class="icon-th-large"></i>
                        Skins / Capes
                    </a>
                </li>
                <li <?php if($active_menu == 'help') echo 'class="active"'; ?>>
                    <a href="#" rel="popover" data-toggle="popover" data-placement="bottom" data-content="Mineshafter Squared has honestly never had that great of a help system, thats about to change." data-original-title="Not Available Yet">
                        <i class="icon-question-sign"></i>
                        Help
                    </a>
                </li>
                <li>
                    <a href="#" rel="popover" data-toggle="popover" data-placement="bottom" data-content="The Mineshafter Squared forums have been offline for quite some time now, and I do apologize for that.  I hope the new community will be able to make up for it." data-original-title="Not Available Yet">
                        <i class="icon-globe"></i>
                        Community
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>