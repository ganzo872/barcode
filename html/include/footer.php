<?php
if (!defined('IN_CB')) {
    die('You are not allowed to access to this page.');
}
?>
<section class="output">
    <h3>Гаралт</h3>
    <?php
    $finalRequest = '';
    foreach (getImageKeys() as $key => $value) {
        $finalRequest .= '&' . $key . '=' . urlencode($value);
    }
    if (strlen($finalRequest) > 0) {
        $finalRequest[0] = '?';
    }
    ?>
    <div id="imageOutput">
<?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php } else {
    ?>Бар код үүсгэх утга оруулна уу.<?php } ?>
    </div>
</section>         
</form>
</body>
</html>