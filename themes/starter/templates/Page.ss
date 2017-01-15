<!DOCTYPE html>
<html lang="en">

<head>
    <% base_tag %>
    <% if $ClassName == 'HomePage' %>
        <title>$SiteConfig.Title, Queenstown, Luxury, Camping, Scenic</title>
    <% else %>
        <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
    <% end_if %>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="192x192" href="$AbsoluteBaseURL/favicon.ico">
    <link rel="shortcut icon" href="$AbsoluteBaseURL/favicon.ico">


</head>

<body class="$ClassName">

    <% include Header %>

    $Layout

    <% include Footer %>


<script></script>

</body>
</html>
