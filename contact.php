<?php

session_start();

$_SESSION = $_POST;

if($_SESSION['name']==""){
    header('Location: https://wistra4.github.io/about.html');
    exit();
}

$add_header="From:info@wistra4.github.io/about.html\n";

$add_header .= "Reply-to: info@wistra4.github.io/about.html\n";

$mail = 'info@wistra4.github.io/about.html';

$message =<<<HTML

{$_SESSION['name']}様

この度はお問い合わせいただきまして、誠にありがとうございます。
いただいたメールを確認の上、１週間以内に何らかのご連絡をさせていただきます。
今回お問い合わせいただいている内容は、

- お名前 -

{$_SESSION['name']}

- E_mail -

{$_SESSION['e_mail']}

- お問い合わせ内容 -

{$_SESSION['comment']}

HTML;

mb_language("ja");

mb_internal_encoding("UTF-8");

mb_send_mail($_POST['email'],"お問い合わせありがとうございます",$message,$add_header,$mail);

mb_send_mail($mail,"お問い合わせがありました",$message,$add_header,$mail);

session_destroy();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact form</title>
    </head>
    <body>
        <p>送信完了しました。</P>
        <p>※記入されたメールアドレス宛に、自動返信で確認メールが届きます。確認メールが届かない場合は、メールアドレスを確認のうえ再度お問い合わせください。</p>
    </body>
</html>
