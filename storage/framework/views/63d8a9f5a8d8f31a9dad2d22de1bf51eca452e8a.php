<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1 {
      font-size:60px;
    }
    .content {
      margin:10px;
    }
    input:invalid {
      border: 2px dashed red;
    }
    </style>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/vee-validate@3.2.3/dist/vee-validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vee-validate@3.2.3/dist/rules.umd.min.js"></script>
  </head>
  <body>
    <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/AdvanceTest/resources/views/layouts/default.blade.php ENDPATH**/ ?>