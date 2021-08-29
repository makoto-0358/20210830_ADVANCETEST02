<style>

</style>

<?php $__env->startSection('content'); ?>
<h1>内容確認</h1>
<form action="/thanks" method="post">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="id" value="<?php echo e($form['id']); ?>">
  <table>
    <tr>
      <td>お名前</td>
      <td><?php echo e($form['lastName']); ?><?php echo e($form['firstName']); ?></td>
      <td><input type="hidden" name="lastName" value="<?php echo e($form['lastName']); ?>"></td>
      <td><input type="hidden" name="firstName" value="<?php echo e($form['firstName']); ?>"></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><?php echo e($form['gender']); ?></td>
      <td><input type="hidden" name="gender" value="<?php echo e($form['gender']); ?>">
          $gendername=array();
          $gendername=[
            '1' => "男性",
            '2' => "女性"
          ];
          <td><?php echo e($data = $gendername['var_dump[$form['gender']']]); ?></td>
      </td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><?php echo e($form['email']); ?></td>
      <td><input type="hidden" name="email" value="<?php echo e($form['email']); ?>"></td>
    </tr>
    <tr>
      <td>郵便番号</td>
      <td><?php echo e($form['postcode']); ?></td>
      <td><input type="hidden" name="postcode" value="<?php echo e($form['postcode']); ?>"></td>
    </tr>
    <tr>
      <td>住所</td>
      <td><?php echo e($form['address']); ?></td>
      <td><input type="hidden" name="address" value="<?php echo e($form['address']); ?>"></td>
    </tr>
    <tr>
      <td>建物名</td>
      <td><?php echo e($form['building_name']); ?></td>
      <td><input type="hidden" name="building_name" value="<?php echo e($form['building_name']); ?>"></td>
    </tr>
    <tr>
      <td>ご意見</td>
      <td><?php echo e($form['opinion']); ?></td>
      <td><input type="hidden" name="opinion" value="<?php echo e($form['opinion']); ?>"></td>
    </tr>
  </table>
<button type="submit" name="submit" value="true">送信</button>
<button type="submit" name="return" value="true">修正する</button>
</form>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/AdvanceTest/resources/views/confirm.blade.php ENDPATH**/ ?>