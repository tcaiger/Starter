<!DOCTYPE html>
<html lang="en">

<head>
    <% base_tag %>
    <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="192x192" href="$ThemeDir/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="$ThemeDir/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="$ThemeDir/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="$ThemeDir/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="$ThemeDir/icons/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="$ClassName">

    <% include Header %>

    $Layout

    <% include Footer %>


<script></script>

</body>
</html>
