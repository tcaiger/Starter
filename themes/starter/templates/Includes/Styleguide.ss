<% include Slider %>


<main class="container">

    <div class="page-header">
        <h1>Headings</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
        </div>
        <div class="col-sm-6">
            <h1 class="text-blue">Brand Color</h1>
        </div>
    </div>

    <div class="page-header">
        <h1>Buttons</h1>
    </div>
    <p>
        <button type="button" class="c-btn--default c-btn--lg">Default Button</button>
        <button type="button" class="c-btn--primary c-btn--lg">Blue Button</button>
        <button type="button" class="c-btn--secondary c-btn--lg">Red Button</button>
    </p>
    <p>
        <button type="button" class="c-btn--default">Default Button</button>
        <button type="button" class="c-btn--primary">Blue Button</button>
        <button type="button" class="c-btn--secondary">Red Button</button>
    </p>
    <p>
        <button type="button" class="c-btn--default c-btn--sm">Default Button</button>
        <button type="button" class="c-btn--primary c-btn--sm">Blue Button</button>
        <button type="button" class="c-btn--secondary c-btn--sm">Red Button</button>
    </p>

    <div class="page-header">
        <h1>Forms</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            $ContactForm
        </div>
    </div>

    <div class="page-header">
        <h1>Paragraphs</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <p class="p--lg">
                Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a>
                adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec
                faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero
                nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent
                mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu
                volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus
                eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem,
                consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue
                quis tellus.
            </p>
            <p>
                Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing
                elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus.
                Nunc iaculis <strong>strong</strong> dui. Nam sit amet sem. Aliquam libero nisi,
                imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis,
                massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim
                diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien
                fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at,
                commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.
            </p>
        </div>
    </div>

    <div class="page-header">
        <h1>Tables</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="page-header">
        <h1>Alerts</h1>
        <p class="message good">You successfully read this important <strong>alert</strong> message.</p>
        <p class="message bad">You successfully read this important alert message.</p>
        <p class="message warning">You successfully read this important alert message.</p>
    </div>


    <div class="page-header">
        <h1>Lists</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div><!-- /.col-sm-4 -->
    </div>

    <div class="page-header">
        <h1>Preview Grid</h1>
    </div>
    <% include PreviewGrid %>

</main> <!-- /container -->
