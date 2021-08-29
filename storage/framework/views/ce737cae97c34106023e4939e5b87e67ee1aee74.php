<style>

</style>

<?php $__env->startSection('content'); ?>
<h1>内容確認</h1>
<form action="/check" method="get">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="id">
  <table>
    <tr>
      <td>お名前</td>
      <td><input type="text" name="familyname" required></td>
      <td><input type="text" name="firstname" required></td>
    </tr>
    <?php $__errorArgs = ['familyname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>性別</td>
      <td><input type="radio" name="gender" value="1" checked>男</td>
      <td><input type="radio" name="gender" value="2">女</td>
    </tr>
    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>メールアドレス</td>
      <td><input type="email" name="email" required></td>
    </tr>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>郵便番号</td>
      <td><input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" required></td>
    </tr>
    <?php $__errorArgs = ['postcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>住所</td>
      <td><input type="text" name="address" required></td>
    </tr>
    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>建物名</td>
      <td><input type="text" name="building_name"></td>
    </tr>
    <?php $__errorArgs = ['building_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <tr>
      <td>ご意見</td>
      <td><input type="textarea" name="opinion" required></td>
    </tr>
    <?php $__errorArgs = ['opinion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <tr>
      <td><?php echo e($message); ?></td>
    </tr>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </table>
<button type="submit">確認</button>
</form>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/AdvanceTest/resources/views/check.blade.php ENDPATH**/ ?>