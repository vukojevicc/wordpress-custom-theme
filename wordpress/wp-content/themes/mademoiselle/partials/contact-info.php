<?php
$address = get_option('mademoiselle_address');
$phone = get_option('mademoiselle_phone');
$email = get_option('mademoiselle_email');
?>
<?php
if (!empty($address)) {
?>
    <p><?php echo $address; ?></p>
<?php
}
if (!empty($phone)) {
?>
    <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
<?php
}
if (!empty($email)) {
?>
    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
<?php
}
?>