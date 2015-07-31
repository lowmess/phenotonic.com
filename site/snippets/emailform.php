
<form action="<?php echo $page->url()?>#form" method="post" class="contact__form">

    <label for="name" class="required" required>Name</label>
    <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>

    <label for="email" class="required" required>E-Mail</label>
    <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>

    <label for="message" required>Message</label>
    <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

    <label class="uniform__potty" for="website">Please leave this field blank</label>
    <input type="text" name="website" id="website" class="uniform__potty" />

    <a name="form"></a>

    <?php if ($form->hasMessage()): ?>
        <div class="message <?php e($form->successful(), 'success' , 'error')?>">
            <?php $form->echoMessage() ?>
        </div>
    <?php endif; ?>

    <button class="btn <?php e($form->successful(), 'btn--success' , 'btn--error')?>" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>><?php echo $page->contactButton->html() ?></button>

</form> 
