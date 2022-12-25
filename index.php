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
    <div class="flex-container">
        <div class="first">
            <h1> First Test of knowing how Git works</h1>
            <p>Its seems to keep my past programmed code intact in time for future refrence and possible reuse</p>
            <p>Basically to keep Track of my commit codes</p>
            <p>It very good to add message tag to each commit for good refrence</p>
            <br />
            <p><?php
                $john = 23;
                $sola = 34;
                $Smith;
                $cash = 100;

                $one = $john + $sola;
                $smith = $cash - $one;
                echo ("The ratio for smith is") . " " . $smith;
                //phpinfo();
                ?>
            </p>
        </div>

        <div class="second">
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
    <script src="script.js"></script>
</body>

</html>