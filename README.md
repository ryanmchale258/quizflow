## quizflow

#Resources
###Markdown
Markdown is the pseudo language/syntax for writing content on Github such as this README as well as any pull requests, comments, line notes, etc. For the most part you can just write things normally, but if you do want to do formatting, such as making headings (''#This Is A Heading'') or making something **bold** (``**bold**``), you should familiarize yourself with Markdown. It's extremely easy.
**LINK: [Mastering Markdown](https://guides.github.com/features/mastering-markdown/.)**

###Git Config
This is the issue I had been having with Git when we first made the repository. I wasn't able to push/pull or do any interaction with the repository on GitHub until I had set my name and email address in my local Git config. Before doing anyting else, enter the following commands into a terminal window to set your basic configs.
 ```
 $ git config --global user.name "John Doe"
 $ git config --global user.email johndoe@example.com
 ```
**LINK: [Getting Started - First Time Git Setup](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup)**

###SSH Key for Github
For the moment, once you have cloned the repository, you will be able to pull/push and do what we need to with the remote repository on Github. However every time you push it will ask you for your Github username and password, which is a huge pain in the ass. That's where SSH keys come in. Setting up an SSH key on your computer and then adding it to your Github profile will basically create a secure link between your computer and Github so you don't have to log in every time.
If you have issues, it's not the end of the world to just log in every time, but it genuinely starts to get annoying eventually. Follow the guide below and you should have no problems.
**LINK: [Generating SSH Keys](https://help.github.com/articles/generating-ssh-keys/)**

#Database
~~It was actually a lot easier than I thought to get this set up so that we share a common database running on my hosting but we can develop completely locally. Basically once you clone the repo to your htdocs folder you should be able to visit the url for it and see the live site. There won't be anything you need to do as far as adding :8888 to localhost because the db host isn't localhost at all but rather my IP address and sql port. If you have problems obviously let me know.~~
*Work in progress ^ *

#GIT Workflow
The main branch we will be working out of and maintaining will be ``develop``. The ``master`` branch is protected and will ultimately be our delivery ready files. I'll be periodically merging the project files from ``develop`` into ``master`` to make sure we always have that as a safety.

##Issues
This is how we'll be handling tasks/keeping track of what still needs to be done. It will pretty much be how we handle project management. In the right-hand sidebar of the [Github page](https://github.com/ryanmchale258/quizflow) for the project you'll see a link to Issues. This will show a list of every issue/to-do item that has been added currently. You can add new issues yourself as well, and assign either yourself or me. You can filter this list by the issues assigned to you or to me or in a variety of other ways. Basically when you want to work on something for the project, check this list and find something you have been assigned. Every issue is assigned a numeric value which you can see next to the title of the Issue. We will want this number when we are submitting our pull request later.

##Cloning - How To Get The Project Files The First Time
If you visit the [Github page](https://github.com/ryanmchale258/quizflow) for the repo, in the right-hand sidebar you'll see **HTTPS** clone URL with an input field below it containing the clone url. **IF** you have already set up an SSH Key as per the guide I linked above, you will have to click the ``SSH`` link below this input field to switch the URL to the SSH version. **OTHERWISE** just copy the HTTPS version that is shown by default.

Once you have that link copied (whichever one), open a terminal window and navigate to your htdocs folder. Enter the following command to clone the repo:
```
git clone PASTE-LINK-HERE
```

It will think for a little bit, and then if everything works properly you should now see a ``quizflow`` folder in htdocs containing all the project files. If you ``cd`` into that directory in your terminal window, you should see the branch you are currently on indicated somewhere in your terminal window, likely in brackets. It should be ``(develop)`` by default.

Naturally since you just cloned this, it will be up to date. If you ever aren't sure though, you can always do the following:
```
git pull
```

This will pull down a current version of the entire repo, including any new branches that have been pushed up. At this point, you are ready to work on the project.

##Branches
Basically just remember that anything you are doing on the project, regardless of how small it seems, should be done on its own branch. Be logical about how to organize things. For instance if you're doing a big batch of styling, you could probably put it all in one big branch. Grouping related tasks into one branch to be Pull Requested is always a good thing. To create a new branch to work off of, ensure that you are currently in ``develop``, and enter the following command:
```
git checkout -b name-of-my-new-feature
```

Try to make the name clear, but also concise. I try to keep mine fewer than 5 words, but you want to make sure it's unique, and it should tell the reader what they can expect that branch to be adding/updating/altering. Examples: ``add-base-question-styles``, ``add-database-object-and-query-test``, ``bug-fixes-various``.

If you want to move back to the develop branch, you can do that easily by typing:
```
git checkout develop
```

Because we didn't pass the ``-b`` argument to the ``checkout`` command, it doesn't make a new branch, it just switches to the branch you've specified. If you then want to go back to your new feature branch, just do:
```
git checkout name-of-my-new-feature
```

As long as you don't have any unstaged/uncommitted changes to your branch, you can always switch back and forth like this. If you want to see whether you have any unstaged/uncommitted changes:
```
git status
```

If you attempt to switch to a branch and **do** have unstaged/uncommitted changes, it will just give you an error message. Either ``commit`` or ``stash`` your changes in order to switch.

##Stashing
If you aren't ready to add and commit things but need to switch branches for some reason, stashing is what you do.
```
git stash
```

This basically wraps up your changes and then hides them, so if you then ``git status``, it would appear that you haven't done anything yet. You can then switch between branches freely. If you want to then reapply your changes, you simply run:
```
git stash apply
```

This unwraps your changes and puts them back in their proper place. If, however, you didn't want to reapply them and just wipe them out entirely, you could have done:
```
git stash drop
```

This combo of ``git stash && git stash drop`` is typically how I just scrap everything un-committed if I realize I did something stupid and just want to undo everything since my last commit.

##I Made A Mistake In My Last Commit
If you made a commit and want to undo it, run this command:
```
git reset HEAD~1
```

This reverts the last commit and leaves the files in your staging area. You can then either make your fixes and recommit, or ``git stash && git stash drop`` to scrap everything and start again.

##Ready To Pull Request
If you've finished everything you want for this particular feature, you are ready to push the changes up to Github for review. Make sure you don't have anything unstaged by running a quick ``git status``. If you are up to date, then you are ready to run:
```
git push origin name-of-my-new-feature
```

If you have not generated/added your SSH key as outlined above, you will have to enter your Github username and password at this point. Otherwise it should push everything up for you. Then visit the [Github page](https://github.com/ryanmchale258/quizflow) for the project and you will see a button asking if you want to *Compare and Pull Request*. Click this and you'll go to the page for this pull request. It will show you all your changes so that you can review things and make sure it contains what you want it to. Fill out the text box in the following format:

**Goal**
This is a short description of the main thing this pull request is for.

**Notes**
Any additional information. If you feel it's necessary to explain the whats and whys of what you did in this PR, go in depth here.

**Testing**
If there are any particular instructions as far as how the reviewer should test your changes, list those here. If it's just a styling PR, this section might just say "Visit this page, make sure things look good/consistent/are mobile friendly, etc". If it's a PR adding some functionality to the Dashboard interface, you might list "Log in and try to add a new quiz and add a product to that quiz. Then delete the quiz, re-add it, etc. Try to break things". Basically just tell the reviewer what to check for.

**Time**
List the rough amount of time you spent on this particular task/branch. An estimate for this would have been in the Issue if you were initially assigned one.

**Issue**
If this branch came about as a result of being assigned an Issue, list the issue number here in this format:
```
#2
```

Then you assign your reviewer from the menu on the right-hand side bar. That will always be me (``@ryanmchale258``) by default. I will be assigning you things to review as well. You'll get an email whenever that happens, but you can also always just check the Pull Requests page for the project to see if you have anything assigned to review.

Once I have reviewed and merged your branch, if an Issue number was specified, I will close that issue.

If you have reviewed something of mine and you believe it is ready to be merged, just assign it back to me to merge into develop.

When you are starting a new round of work after taking some time away, always make sure you ``checkout`` ``develop`` and do a ``git pull`` to ensure you're working with the most up to date files.