<?php
$class = is_search() ? 'collapse in toggleable' : 'collapse';
$value = is_search() ? $_GET['s'] : '';
?>

<form action="/" method="get">
<div class="<?php echo $class;?>" id="collapseSearch">
    <div id="search-input-box" class="form-group has-feedback has-clear">

        <input type="text" value="<?php echo $value;?>" name="s" class="form-control" id="search-input" autocomplete="off" placeholder="Search on Santex Blog...">
        <span id="search-close-button" class="form-control-clear form-control-feedback hidden"><i class="fas fa-times"></i></span>
    </div>
</div>
</form>