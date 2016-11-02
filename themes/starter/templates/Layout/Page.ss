


<!-- navbar -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Navigation</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div>
    <div class="container">
        <h1>
            Base Styles
        </h1>
        <p>
            The purpose of this page is to view all the base styles of a project.
        </p>
    </div>
</div>





<div class="container" role="main">


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
            <h6>Heading 6</h6>
        </div>
        <div class="col-sm-6">
            <h1 class="text-brand">Brand Color</h1>
            <h2 class="text-brand-light">Brand Light</h2>
            <h3 class="text-secondary">Secondary</h3>
        </div>
    </div>


    <div class="page-header">
        <h1>Buttons</h1>
    </div>
    <p>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-brand">Brand</button>
        <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
        <button type="button" class="btn btn-lg btn-dark">Dark</button>
        <button type="button" class="btn btn-lg btn-inverse">Inverse</button>
        <button type="button" class="btn btn-lg btn-outline">Outline</button>
    </p>
    <p>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-brand">Brand</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-inverse">Inverse</button>
        <button type="button" class="btn btn-outline">Outline</button>
    </p>
    <p>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-brand">Brand</button>
        <button type="button" class="btn btn-sm btn-secondary">Secondary</button>
        <button type="button" class="btn btn-sm btn-dark">Dark</button>
        <button type="button" class="btn btn-sm btn-inverse">Inverse</button>
        <button type="button" class="btn btn-sm btn-outline">Outline</button>
    </p>



    <div class="page-header">
        <h1>Forms</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" placeholder="Enter a message here" rows="4"></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-brand">Submit</button>
            </form>
        </div>
    </div>


    <div class="page-header">
        <h1>Paragraphs</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <p>
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
    </div>
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
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

    <div style="width: 100%; height: 60px;"></div>

</div> <!-- /container -->
