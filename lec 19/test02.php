<h1>PHP 5 Syntax</h1>

<hr>
<p class="intro">A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
<hr>

<h2>Basic PHP Syntax</h2>
<p>A PHP script can be placed anywhere in the document.</p>
<p>A PHP script starts with <b>&lt;?php</b> and ends with <b>?&gt;</b>:</p>
<div class="w3-code w3-border notranslate htmlHigh"><div>
        &lt;?php<br>
        // PHP code goes here<br>
        ?&gt;
    </div></div>
<p>The default file extension for PHP files is &quot;.php&quot;.</p>
<p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>
<p>Below, we have an example of a simple PHP file, with a PHP script that uses a
    built-in PHP function &quot;echo&quot; to output the text
    &quot;Hello World!&quot; on a web page:</p>
    <h1>
    <?php
        echo "Hello World written in PHP";
    ?>
    </h1>
<p><strong>Note:</strong> PHP statements end with a semicolon (;).</p>
<hr>


<h2>Comments in PHP</h2>
<p>A comment in PHP code is a line that is not read/executed as part of the
    program. Its only purpose is to be read by someone who is looking at the code.</p>
<p>Comments can be used to:</p>
<ul>
    <li>Let others understand what you are doing</li>
    <li>Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code</li>
</ul>
<p>PHP supports several ways of commenting:</p>
<div>
    <h3>Example</h3>
    <div>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;?php<br>
        // This is a single-line comment<br><br>
        # This is also a single-line comment<br><br>
        /*<br>
        This is a multiple-lines comment block<br>that spans over multiple<br>lines<br>
        */<br><br>// You can also use comments to leave out parts of a code line<br>$x = 5 /* + 15 */ + 5;<br>echo $x;<br>
        <?php
        $x = 5 /* + 15 */ + 5;
        echo $x;
        ?>
        <br>
        ?&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>
</div>
<hr>

<h2>PHP Case Sensitivity</h2>
<p>In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions,
    and user-defined functions are NOT case-sensitive.</p>
<p>In the example below, all three echo statements below are legal (and equal):</p>

<div>
    <h3>Example</h3>
    <div>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;?php<br>
        ECHO &quot;Hello World!&lt;br&gt;&quot;;<br>echo &quot;Hello World!&lt;br&gt;&quot;;<br>
        EcHo &quot;Hello World!&lt;br&gt;&quot;;<br>?&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>
    <?php
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";
    ?>
</div>

<div>
    <p>However; all variable names are case-sensitive.</p>
</div>

<p>In the example below, only the first statement will display the value of the
    $color variable (this is because $color, $COLOR, and $coLOR are treated as three
    different variables):</p>

<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;body&gt;<br><br>
        &lt;?php<br>$color = &quot;red&quot;;<br>
        echo &quot;My car is &quot; . $color . &quot;&lt;br&gt;&quot;;<br>echo &quot;My house is &quot; . $COLOR . &quot;&lt;br&gt;&quot;;<br>echo &quot;My boat is &quot; . $coLOR . &quot;&lt;br&gt;&quot;;<br>?&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
    </div>
    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    #echo "My house is " . $COLOR . "<br>";
    #echo "My boat is " . $coLOR . "<br>";
    ?>
</div>


<h2>Creating (Declaring) PHP Variables</h2>
<p>In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        &lt;?php<br>
        $txt = &quot;Hello world!&quot;;<br>
        $x = 5;<br>$y = 10.5;<br>
        ?&gt;
    </div>
</div>
<p>After the execution of the statements above, the variable <b>$txt</b> will hold the value
    <b>Hello world!</b>, the variable <strong>$x</strong> will hold the value <strong>5</strong>,
    and the variable <strong>$y</strong> will hold the value <strong>10.5</strong>.</p>
<p><b>Note:</b> When you assign a text value to a variable, put quotes around the value.</p>
<p><strong>Note:</strong> Unlike other programming languages, PHP has no command
    for declaring a variable. It is created the moment you first assign a value to
    it.</p>

<div class="w3-panel w3-note">
    <p>Think of variables as containers for storing data.</p>
</div>

<hr>

<h2>PHP Variables</h2>
<p>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</p>
<p>Rules for PHP variables:</p>
<ul>
    <li>A variable starts with the $ sign, followed by the name of the variable</li>
    <li>A variable name must start with a letter or the underscore character</li>
    <li>A variable name cannot start with a number</li>
    <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
    <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
</ul>

<div class="w3-panel w3-note">
    <p>Remember that PHP variable names are case-sensitive!</p>
</div>
<hr>

<hr>
<h2>Output Variables</h2>
<p>The PHP <code class="w3-codespan">echo</code> statement is often used to output data to the screen.</p>
<p>The following example will show how to output text and a variable:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        &lt;?php<br>
        $txt = &quot;PHP&quot;;<br>
        echo &quot;I love $txt!&quot;;<br>?&gt;
    </div>
    <?php
    $txt = "PHP";
    echo "I love $txt!";
    ?>
    <br>
    <?php
    $txt = "PHP";
    echo "I love " . $txt . "!";
    ?>
    <br>
    <?php
    $var1 = 5;
    $var2 = 4;
    echo $var1 + $var2;
    ?>
</div>




<h2>PHP is a Loosely Typed Language</h2>
<p>In the example above, notice that we did not have to tell PHP which data type the variable is.</p>
<p>PHP automatically converts the variable to the correct data type, depending on its value.</p>
<p>In other languages such as C, C++, and Java, the programmer must declare the
    name and type of the variable before using it.</p>
<hr>

<h2>PHP Variables Scope</h2>
<p>In PHP, variables can be declared anywhere in the script.</p>
<p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>
<p>PHP has three different variable scopes:</p>
<ul>
    <li>local</li>
    <li>global</li>
    <li>static</li>
</ul>
<hr>

<h2>Global and Local Scope</h2>
<p>A variable declared <b>outside</b> a function has a GLOBAL SCOPE and can only
    be accessed outside a function:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;?php<br>$x = 5; // global scope<br><br>function myTest() {<br>&nbsp;&nbsp;&nbsp; // using x inside this function will generate an error<br>&nbsp;&nbsp;&nbsp; echo &quot;&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;&quot;;<br>} <br>myTest();<br><br>echo &quot;&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;&quot;;<br>?&gt;
    </div>
    <?php
    $x = 5; // global scope

    function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    ?>
</div>

<p>A variable declared <b>within</b> a function has a LOCAL SCOPE and can only
    be accessed within that function:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;?php<br>function myTest() {<br>&nbsp;&nbsp;&nbsp; $y = 5; // local scope<br>&nbsp;&nbsp;&nbsp; echo &quot;&lt;p&gt;Variable y inside function is: $y&lt;/p&gt;&quot;;<br>} <br>myTest();<br><br>// using y outside the function will generate an error<br>echo &quot;&lt;p&gt;Variable y outside function is: $y&lt;/p&gt;&quot;;<br>?&gt;
    </div>
    <?php
    function myTest1() {
        $y = 5; // local scope
        echo "<p>Variable y inside function is: $y</p>";
    }
    myTest1();

    // using x outside the function will generate an error
    echo "<p>Variable y outside function is: $y</p>";
    ?>
</div>

<div class="w3-panel w3-note">
    <p>You can have local variables with the same name in different functions,
        because local variables are only recognized by the function in which they are
        declared.</p>
</div>

<hr>

<h2>PHP The global Keyword</h2>
<p>The <code class="w3-codespan">global</code> keyword is used to access a global variable from within a function.</p>
<p>To do this, use the <code class="w3-codespan">global</code> keyword before the variables (inside the
    function):</p>

<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;?php<br>
        $x = 5;<br>$y = 10;<br><br>
        function myTest()
        {<br>
        &nbsp;&nbsp;&nbsp; global $x, $y;<br>
        &nbsp;
        &nbsp;
        $y = $x + $y;<br>
        }<br><br>
        myTest();<br>
        echo $y; // outputs 15<br>
        ?&gt;
    </div>
    <?php
    $x1 = 5;
    $y1 = 10;

    function myTest2() {
        global $x1, $y1;
        $y1 = $x1 + $y1;
    }

    myTest2();
    echo $y1; // outputs 15
    ?>
</div>

<p>PHP also stores all global variables in an array called $GLOBALS[<i>index</i>].
    The <em>index</em> holds the name of the variable. This array is also accessible from
    within functions and can be used to update global variables directly.</p>
<p>The example above can be rewritten like this:</p>

<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;?php<br>
        $x = 5;<br>
        $y = 10;<br>
        <br>
        function myTest()
        {<br>
        &nbsp;
        &nbsp;
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];<br>
        } <br>
        <br>
        myTest();<br>
        echo $y; // outputs 15<br>
        ?&gt;
    </div>
    <?php
    $x3 = 5;
    $y3 = 10;

    function myTest3() {
        $GLOBALS['y3'] = $GLOBALS['x3'] + $GLOBALS['y3'];
    }

    myTest3();
    echo $y3; // outputs 15
    #print_r($GLOBALS);
    ?>
 </div>
<hr>

<h2>PHP The static Keyword</h2>
<p>Normally, when a function is completed/executed, all of its variables are deleted.
    However, sometimes we want a local variable NOT to be deleted. We need it for a
    further job.</p>
<p>To do this, use the <code class="w3-codespan">static</code> keyword when you first declare the
    variable:</p>

<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code htmlHigh notranslate">
        &lt;?php<br>function myTest()
        {<br>
        &nbsp;&nbsp;&nbsp; static $x = 0;<br>
        &nbsp;&nbsp;&nbsp; echo $x;<br>
        &nbsp;&nbsp;&nbsp; $x++;<br>
        }<br><br>
        myTest();<br>
        myTest();<br>
        myTest();<br>?&gt;
    </div>
    <?php
    function myTest4() {
        static $x4 = 0;
        echo $x4;
        $x4++;
    }

    myTest4();
    myTest4();
    myTest4();
    ?>
</div>

<p>Then, each time the function is called, that variable will still have the
    information it contained from the last time the function was called.</p>
<p><b>Note:</b> The variable is still local to the function.</p>


