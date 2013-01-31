<div id="texture-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="texture-modal" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>New Skin</h3>
    </div>
    <div class="alert alert-error hide" id="texture-error">
    </div>
    <div class="modal-body">
        <div class="center_load">
            &nbsp;
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary" id="create-texture">Upload</button>
    </div>
</div>
<div id="control-bar">
    <?php if ($user && $active_skin): ?>
        <div id="preview" data-render3d data-url="<?php echo $active_skin->file_path(); ?>">
        </div>
    <?php endif; ?>
    <ul id="action-list" class="nav nav-list">
        <li class="group">
            <?php if($user): ?>
                <a type="button" id="upload-skin" class="btn btn-link" href="/textures/form" data-toggle="modal" data-target="#texture-modal" >Upload Skin</a>
            <?php endif; ?>
        </li>
    </ul>
</div>
<div id="texture-display">
    <div id="skin-pane">
        <?php foreach($skins as $skin): ?>
            <!--<div class="minecraft_head" data-size="5" data-minecrafthead="/<?php echo $skin->base_location();?>">
            </div>-->
            <div class="skin">
                <button type="button" class="close">&times;</button>
                <div class="name">
                    <a href="#" title="Preview Skin" class="btn btn-link btn-large">
                        <?php echo $skin->name; ?>
                    </a>
                </div>
                <div class="minecraft_model" data-size="5" title="Set Active"
                     data-minecraftmodel="/<?php echo $skin->base_location();?>"
                     data-id="<?php echo $skin->id; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>