
# pulp

![logo](https://user-images.githubusercontent.com/17229643/55247565-50245180-528b-11e9-9947-aa3c54ea05bb.png)  

Pulp is a [Hugo](https://gohugo.io/) theme for getting a simple, easy-to-read blog site.

## Screenshots

![screenshot-top](https://user-images.githubusercontent.com/17229643/55247370-c7a5b100-528a-11e9-835b-108bd6047699.png)

![screenshot-list](https://user-images.githubusercontent.com/17229643/55247387-d12f1900-528a-11e9-8144-c984031e16c0.png)

![screenshot-page](https://user-images.githubusercontent.com/17229643/55247395-d5f3cd00-528a-11e9-82ed-4830523c5bfa.png)

## Installation

If your site is also under version control using git, the easiest way to install this theme is to add it as a submodule. If you have not created a git repo for your project yet, you need to run `git init` beforehand. Inside the folder of your Hugo site, run the following command.

```

git submodule add https://github.com/koirand/pulp.git themes/pulp

```

Alternatively, you can clone the theme into your project.

```

git clone https://github.com/koirand/pulp.git themes/pulp

```

## Configuration

Configure your config.toml with reference to exampleSite.

Put your own avatar image in /static/img/avatar.jpg of your own site, and also favicon.ico. Hugo will automatically use that images instead of the standard one. It's not necessary to alter the theme.

## Update the theme

You can update the theme by issuing the following command inside your project folder.

```

git submodule update --remote --rebase
The MIT License (MIT)

Copyright (c) 2018 YOUR_NAME_HERE

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


```

If you have cloned the theme, you can run `git pull` inside the theme folder.

