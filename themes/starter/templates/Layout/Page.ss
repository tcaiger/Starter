<%--<% include Slider %>--%>

<div class="container l-container u-mt--sm">
    $Form

    $Days(02, 2017)
</div>

<section class="container u-mt--sm">

    <div class="c-calendar--responsive row">
        <p>Scroll ></p>
        <div class="c-calendar">

            <% loop $DaysInMonth(06,2017) %>

                <div class="c-day">
                    <div class="inner">
                        <p class="day">$ID</p>
                        <p class="name">$Name</p>
                    </div>
                </div>

            <% end_loop %>

        </div>
    </div>

</section>

<%--<% include Styleguide %>--%>
<% include PreviewGrid %>
<%--<% include Overlays %>--%>
