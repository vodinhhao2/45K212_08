<?php $id = 1; $query = "DELETE FROM cn_binhluan WHERE ma = '$id'"; $result = $db->exec($query); ?>
if ($result > 0) {
echo 'Thao Tác Thành Công';
}
