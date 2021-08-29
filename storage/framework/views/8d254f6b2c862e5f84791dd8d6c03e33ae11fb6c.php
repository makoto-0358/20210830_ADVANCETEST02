<style>
  svg.w-5.h-5 {
  width: 30px;
  height: 30px;
  }
  .overflow-ellipsis {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 20ch;
  font-family: "Courier New", Consolas, monospace;
}
.width{
  width: 20ch;
  font-family: "Courier New", Consolas, monospace;
}

</style>

<?php $__env->startSection('content'); ?>
<h1>管理システム</h1>
<form id="find" action="/find" method="post">
  <?php echo csrf_field(); ?>
  <table>
    <tr>
      <td>お名前</td>
      <td><input type="text" name="fullname"></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><input type="radio" name="gender" value="全て" checked>全て</td>
      <td><input type="radio" name="gender" value="男性">男性</td>
      <td><input type="radio" name="gender" value="女性">女性</td>
    </tr>
    <tr>
      <td>登録日</td>
      <td><input type="date" name="created_at1"></td><td><?php echo e("~"); ?></td><td><input type="date" name="created_at2"></td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><input type="email" name="email"></td>
    </tr>
  </table>
</form>
<button type="submit" form="find">検索</button>
<form action="/find" method="post">
<?php echo csrf_field(); ?>
  <button type="submit">リセット</button>
</form>

<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th class="width">ご意見</th>
  </tr>
  <?php if(@isset($contacts)): ?>
  <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($contact->id); ?></td>
      <td><?php echo e($contact->lastName); ?><?php echo e($contact->firstName); ?></td>
      <td><?php echo e($contact->gender); ?></td>
      <td><?php echo e($contact->email); ?></td>
      <td class="overflow-ellipsis"><?php echo e(mb_strimwidth("$contact->opinion", 0 ,54, "...","UTF-8")); ?></td>
      <td>
        <form id="delete" action="/delete" method="post">
        <?php echo csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo e($contact->id); ?>">
          <button type="submit" form="delete">削除</button>
        </form>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
</table>
<?php echo e($contacts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/AdvanceTest/resources/views//manegement.blade.php ENDPATH**/ ?>