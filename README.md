# Vue UI Widgets
Vue JS UI Widegets

It provides Vue JS powered ui widgets.

This library is to make it easy to integrate different ui widgets in develppemnt.

Currently it supports the following widgets.

* Accordion
* Alert
* Card
* Chips
* Modal
* Notice
* Tabs

## Installation

Include the following files into your project

* vue-ui-widgets.css
* vue.js / vue.min.js
* vue-ui-widgets.js
* vue.widgets.php

S:N: place vue-ui-widgets.js just after vue.js/vue.min.js file 

````
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/vue-ui-widgets.css" />
</head>
<body>
<?php include_once 'components/vue.widgets.php';?>

<script src="js/vue.min.js"></script>
<script src="js/vue-ui-widgets.js"></script>

</body>
</html>

````


Now, you can use the widget components of Vue UI Widgets in your vue instance of your project.

## Accordion

![accordion](http://mithublue.github.io/images/vue-ui-widgets/accordion.png)

###### Code

```
<accordion>
        <div slot="acc-panel">
            <button>Section 1</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 2</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 3</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </accordion>
```

## Alert

![alert](http://mithublue.github.io/images/vue-ui-widgets/alert.png)

###### Code
```
<alert :type="'danger'"><div slot="alert-data">This is danger alert !</div></alert>
<alert :type="'success'"><div slot="alert-data">This is success alert !</div></alert>
<alert :type="'info'"><div slot="alert-data">This is success alert !</div></alert>
<alert :type="'warning'"><div slot="alert-data">This is success alert !</div></alert>
```

## Card

![card](http://mithublue.github.io/images/vue-ui-widgets/card.png)

###### Code
```
<card size="400">
        <div slot="header"><h3>Card Header</h3></div>
        <div slot="content">
            <img src="images/nature.jpg" alt="Nature" width="100%"><br><br>
            This is some content for card header to show you how it works ! Hope, You will like it ! Enjoy !
        </div>
        <div slot="footer">This is card footer</div>
    </card>
```

## Chips

![chips](http://mithublue.github.io/images/vue-ui-widgets/chip.png)

###### Code

```
<chip :removable="true">
    <div slot="chip-data" >
        <img src="css/avatar.png" alt="Person" />
        John
    </div>
</chip>
<chip :removable="false">
    <div slot="chip-data" >
        <img src="css/avatar.png" alt="Person" />
        Doe
    </div>
</chip>
```

## Modal

![modal](http://mithublue.github.io/images/vue-ui-widgets/modal.png)

###### Code

```
<button @click="show = true">Show Modal</button>
<modal :show.sync="show">
    <div slot="header">
        <h3>This is custom header</h3>
    </div>
    <div slot="footer">This is custom footer</div>
</modal>
```

In vue instance

```
var app = new Vue({
    el : '#app',
    data : {
        show : false,
    }
});
```

## Notice

![notice](http://mithublue.github.io/images/vue-ui-widgets/notice.png)

###### Code

```
<notice :type="'danger'">
    <div slot="notice-data">
        This is notice
    </div>
</notice>
<notice :type="'success'">
    <div slot="notice-data">
        This is notice
    </div>
</notice>
<notice :type="'info'">
    <div slot="notice-data">
        This is notice
    </div>
</notice>
<notice :type="'warning'">
    <div slot="notice-data">
        This is notice
    </div>
</notice>
```

## Tabs

![notice](http://mithublue.github.io/images/vue-ui-widgets/notice.png)

###### Code
```
<tabs
    :tabnames = "['Tab 1', 'Tab 2']"
    >
    <div slot="tabdata">
        <div>
            <h3>Tab 1 Heading</h3>
            <div>
                <p>
                    This is tab1 content
                </p>
            </div>
        </div>
        <div>
            <h3>tab 2 Heading</h3>
            <p>
                Anything can be added how i want !
            </p>
        </div>
    </div>
</tabs>
```
