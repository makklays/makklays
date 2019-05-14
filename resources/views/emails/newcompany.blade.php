<body>

Add a new company on site <br/><br/>

<b>Name:</b> <?=$company['name']?> <br/>

<?php if(isset($company['email']) && !empty($company['email'])): ?>
    <b>E-mail:</b> <?=$company['email']?> <br/>
<?php endif; ?>

<?php if(isset($company['website']) && !empty($company['website'])): ?>
    <b>Website:</b> <?=$company['website']?> <br/>
<?php endif; ?>



<?=date('d.m.Y H:i')?>

</body>