<!doctype html>
<html lang="{{ app()->getLocale() }}">>
    <head>
        <title> Create Product | Product Store </title>
</head>
<body>
    <div class="fles-center positio-ref full-heigh">
        <div class="content">
            <form mehtod="POST" action="{{config('app.url'}}/products">
                <h1> Enter Details to create a product</h1>
                <div class="form-input">
                    <label>Name</label> <input type="text" name="name">
                </div>

                <div class="form-input">
                    <label>Description</label> <input type="text" name="description">
                </div>

                <div class="form-input">
                    <label>Count</label> <input type="text" name="count">
                </div>
                <div class="form-input">
                    <label>Price</label> <input type="text" name="price">
                </div>

                <button type="submit">Submit</button>
</form>
</div>
</body>
</html>