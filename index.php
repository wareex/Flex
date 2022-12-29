<html>

<head>
    <title>
        First Checking
    </title>
    <link rel="stylesheet" href="style.css">
    <?php //include_once("cal.php")    
    ?>
</head>

<body>
    <nav>
        <ul class="flex-container2">
            <li><img src="#">LOGO </li>
            <li><a href="#">Home</a></li>
            <li><a href="post.php">Blog</a></li>
            <li><a href="about.php">About us</a></li>
        </ul>
    </nav>
    <div id= "firstcontent" class="flex-container">
        <div class="first">
            <h1> Inputs with JS</h1>

            <!--PHP STUFF -->
            <p>PHP Chunck</p>
            <p><?php
                include_once('cal.php');
                ?></p>
            <!--Form handling with Javascript intervene -->
            <table>
                <tr>

                    <!--LOGIN STUFF -->
            </table>
            <table align="center" cellspacing="2" border="1px">
                <th align="center">LOGIN HERE</th>
            </table>
            <form method="post" action="post.php">
                <table align="center" border="0px" cellspacing="2">
                    <tr>
                        <th>USERNAME</th>
                        <td><input type="text" name="username" value="Input Username"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btn" value="REGISTER"></td>
                        <td><input type="reset" name="btn" value="CANCEL"></td>
                    </tr>
            </form>
            </table>
            <br />
            <br />

            <!--REGISTER STUFF -->
            <table align="center" border="1px" cellspacing="2">
                <th align="center"> New Member? Get Registered </th>
            </table>
            <form method="post" action="index.php">
                <table align="center" border="0px" cellspacing="2">
                    <tr>
                        <th>Full Name</th>
                        <td><input type="text" name="Names" value="YAMAHA USAGI"></td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td><input type="text" name="email" value="EMAIL@mails.com"></td>
                    </tr>

                    <tr>
                        <th>Phone Number</th>
                        <td><input type="number" name="phone" value="+23409398383"></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="username" value="user"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <th>Retype Password</th>
                    <td><input type="password" name="repass"></td>
                    </tr>
                    <tr>
                        <th>Gender: </th>
                        <td>
                            <label>Male</label>
                            <input type="radio" name="male">
                            <label>Female</label>
                            <input type="radio" name="female">
                            <label>I don't know</label>
                            <input type="radio" name="others">
                        </td>
                    </tr>
                    <tr>
                        <th>Level of Study</th>
                        <td><select name="level">
                                <option>100</option>
                                <option>200</option>
                                <option>300</option>
                                <option>400</option>
                                <option>500</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Courses of interest:</th>
                        <td>
                            <label>Mathematics</label>
                            <input type="checkbox" name="Math">
                            <label>English</label>
                            <input type="checkbox" name="eng">
                            <label>Physics</label>
                            <input type="checkbox" name="phy">
                            <label>Chemistry</label>
                            <input type="checkbox" name="chem">
                        </td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><textarea rows="9px" cols="15px" name="message" value="Messages"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btn" value="REGISTER"></td>
                        <td><input type="reset" name="btn" value="RESET FORM"></td>
                    </tr>
            </form>
            </table>
            </tr>
        </div>

        <div id="secondcontent" class="second">
            <h1>It quite important a knwoledge to know few Git commands by heart</h1>
            <p>Gits Commads</p>
            <pre>usage: git [--version] [--help] [-C <path>] [-c <name>=<value>]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | -P | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]
           [--super-prefix=<path>] [--config-env=<name>=<envvar>]
           <command> [<args>]

These are common Git commands used in various situations:

start a working area (see also: git help tutorial)
   clone     Clone a repository into a new directory
   init      Create an empty Git repository or reinitialize an existing one

work on the current change (see also: git help everyday)
   add       Add file contents to the index
   mv        Move or rename a file, a directory, or a symlink
   restore   Restore working tree files
   rm        Remove files from the working tree and from the index

examine the history and state (see also: git help revisions)
   bisect    Use binary search to find the commit that introduced a bug
   diff      Show changes between commits, commit and working tree, etc
   grep      Print lines matching a pattern
   log       Show commit logs
   show      Show various types of objects
   status    Show the working tree status

grow, mark and tweak your common history
   branch    List, create, or delete branches
   commit    Record changes to the repository
   merge     Join two or more development histories together
   rebase    Reapply commits on top of another base tip
   reset     Reset current HEAD to the specified state
   switch    Switch branches
   tag       Create, list, delete or verify a tag object signed with GPG

collaborate (see also: git help workflows)
   fetch     Download objects and refs from another repository
   pull      Fetch from and integrate with another repository or a local branch
   push      Update remote refs along with associated objects

'git help -a' and 'git help -g' list available subcommands and some
concept guides. See 'git help <command>' or 'git help <concept>'
to read about a specific subcommand or concept.
See 'git help git' for an overview of the system.
</pre>
        </div>
    </div>
    <script src='new.js'> </script>
</body>

</html>