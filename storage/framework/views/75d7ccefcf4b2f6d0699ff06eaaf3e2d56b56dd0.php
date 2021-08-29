<style>

</style>

<?php $__env->startSection('content'); ?>
<h1>お問い合わせ</h1>
<form action="/confirm" method="post">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="id" value="<?php echo e(old('id')); ?>">
  <table>
    <tr>
      <td>お名前</td>
      <td><input type="text" name="lastName" value="<?php echo e(old('lastName')); ?>" required></td>
      <td><input type="text" name="firstName" value="<?php echo e(old('firstName')); ?>" required></td>
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
    <?php $__errorArgs = ['firstName'];
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
      <td><input type="radio" name="gender" value="1" <?php echo e(old('gender','男性') == '男性'?'checked':''); ?>>男性</td>
      <td><input type="radio" name="gender" value="2" <?php echo e(old('gender') == '女性'?'checked':''); ?>>女性</td>
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
      <td><input type="email" name="email" value="<?php echo e(old('email')); ?>" required></td>
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
      <td><input type="text" name="postcode" oninput="value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace(/[ー−]/g,'-').replace(/[^\-\d]/g,'');
" value="<?php echo e(old('postcode')); ?>" pattern="\d{3}-\d{4}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" required></td>
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
      <td><input type="text" name="address" value="<?php echo e(old('address')); ?>" required></td>
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
      <td><input type="text" name="building_name" value="<?php echo e(old('building_name')); ?>"></td>
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
      <td><input type="textarea" name="opinion" value="<?php echo e(old('opinion')); ?>" required></td>
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

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/AdvanceTest/resources/views/index.blade.php ENDPATH**/ ?>