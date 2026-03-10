# Industry Level Git Commands Practice
# 1. Git Configuration Commands
## git config --global user.name
Syntax:
git config --global user.name "Your Name"

Purpose:
Sets the global username used for Git commits.

Example:
git config --global user.name "Sahithi"

## git config --global user.email

Syntax:
git config --global user.email "email@example.com"

Purpose:
Sets the email address associated with Git commits.

Example:
git config --global user.email "sahithi@gmail.com"

## git config --list

Syntax:
git config --list

Purpose:
Displays all Git configuration settings.

Example:
git config --list

## git config --unset

Syntax:
git config --unset user.name

Purpose:
Removes a configuration value.

Example:
git config --unset user.name

# 2. Repository Setup Commands

## git init

Syntax:
git init

Purpose:
Initializes a new Git repository.

Example:
git init

## git clone

Syntax:
git clone <repository-url>

Purpose:
Copies a remote repository to your local machine.

Example:
git clone https://github.com/user/hotelbooking.git

## git clone --branch

Syntax:
git clone --branch <branch-name> <repo-url>

Purpose:
Clones a specific branch from a repository.

Example:
git clone --branch main https://github.com/user/project.git

## git clone --depth

Syntax:
git clone --depth 1 <repo-url>

Purpose:
Clones only the latest commit history.

Example:
git clone --depth 1 https://github.com/user/hotelbooking.git 

# 3. Repository Status & Inspection

## git status

Syntax:
git status

Purpose:
Shows the current state of the working directory.

Example:
git status

## git log

Syntax:
git log

Purpose:
Displays commit history.

Example:
git log

## git log --oneline

Syntax:
git log --oneline

Purpose:
Shows commit history in a short format.

Example:
git log --oneline

## git log --graph

Syntax:
git log --graph

Purpose:
Shows commit history with branch graph.

Example:
git log --graph

## git show

Syntax:
git show

Purpose:
Displays details about a commit.

Example:
git show

## git diff

Syntax:
git diff

Purpose:
Shows differences between files.

Example:
git diff

## git diff --staged

Syntax:
git diff --staged

Purpose:
Shows differences between staged and committed files.

Example:
git diff --staged

Screenshot:
(Add screenshot)

---

## git blame

Syntax:
git blame <file>

Purpose:
Shows who modified each line of a file.

Example:
git blame index.html

Screenshot:
(Add screenshot)

---

## git reflog

Syntax:
git reflog

Purpose:
Shows history of HEAD changes.

Example:
git reflog

Screenshot:
(Add screenshot)

---

## git shortlog

Syntax:
git shortlog

Purpose:
Summarizes commits by author.

Example:
git shortlog

Screenshot:
(Add screenshot)

---

# 4. File Tracking Commands

## git add

Syntax:
git add <file>

Purpose:
Adds a file to staging area.

Example:
git add index.html

Screenshot:
(Add screenshot)

---

## git add .

Syntax:
git add .

Purpose:
Adds all files to staging area.

Example:
git add .

Screenshot:
(Add screenshot)

---

## git add -p

Syntax:
git add -p

Purpose:
Adds changes interactively.

Example:
git add -p

Screenshot:
(Add screenshot)

---

## git restore

Syntax:
git restore <file>

Purpose:
Restores file from last commit.

Example:
git restore index.html

Screenshot:
(Add screenshot)

---

## git restore --staged

Syntax:
git restore --staged <file>

Purpose:
Removes file from staging area.

Example:
git restore --staged index.html

Screenshot:
(Add screenshot)

---

## git rm

Syntax:
git rm <file>

Purpose:
Removes a file from repository.

Example:
git rm test.txt

Screenshot:
(Add screenshot)

---

## git mv

Syntax:
git mv <old-name> <new-name>

Purpose:
Renames or moves a file.

Example:
git mv file1.txt file2.txt

Screenshot:
(Add screenshot)

---

# 5. Commit Commands

## git commit

Syntax:
git commit

Purpose:
Creates a commit from staged changes.

Example:
git commit

Screenshot:
(Add screenshot)

---

## git commit -m

Syntax:
git commit -m "message"

Purpose:
Creates commit with message.

Example:
git commit -m "Updated homepage"

Screenshot:
(Add screenshot)

---

## git commit --amend

Syntax:
git commit --amend

Purpose:
Modifies last commit.

Example:
git commit --amend

Screenshot:
(Add screenshot)

---

## git commit --no-edit

Syntax:
git commit --no-edit

Purpose:
Reuses previous commit message.

Example:
git commit --no-edit

Screenshot:
(Add screenshot)

---

# 6. Branch Management

## git branch

Syntax:
git branch

Purpose:
Lists branches.

Example:
git branch

Screenshot:
(Add screenshot)

---

## git branch -a

Syntax:
git branch -a

Purpose:
Lists all branches including remote.

Example:
git branch -a

Screenshot:
(Add screenshot)

---

## git branch -d

Syntax:
git branch -d <branch-name>

Purpose:
Deletes a branch.

Example:
git branch -d test

Screenshot:
(Add screenshot)

---

## git branch -D

Syntax:
git branch -D <branch-name>

Purpose:
Force deletes a branch.

Example:
git branch -D test

Screenshot:
(Add screenshot)

---

## git checkout

Syntax:
git checkout <branch>

Purpose:
Switches branch.

Example:
git checkout main

Screenshot:
(Add screenshot)

---

## git checkout -b

Syntax:
git checkout -b <branch>

Purpose:
Creates and switches to branch.

Example:
git checkout -b feature1

Screenshot:
(Add screenshot)

---

## git switch

Syntax:
git switch <branch>

Purpose:
Switches branches.

Example:
git switch main

Screenshot:
(Add screenshot)

---

## git switch -c

Syntax:
git switch -c <branch>

Purpose:
Creates and switches branch.

Example:
git switch -c newbranch

Screenshot:
(Add screenshot)

---

# 7. Merge Commands

## git merge

Syntax:
git merge <branch>

Purpose:
Combines branches.

Example:
git merge feature1

Screenshot:
(Add screenshot)

---

## git merge --no-ff

Syntax:
git merge --no-ff <branch>

Purpose:
Creates merge commit even if fast-forward possible.

Example:
git merge --no-ff feature1

Screenshot:
(Add screenshot)

---

# 8. Remote Repository Commands

## git remote

Syntax:
git remote

Purpose:
Lists remote repositories.

Example:
git remote


## git remote -v

Syntax:
git remote -v

Purpose:
Shows remote URLs.

Example:
git remote -v

## git remote add

Syntax:
git remote add origin <url>

Purpose:
Adds remote repository.

Example:
git remote add origin https://github.com/user/project.git


## git remote remove

Syntax:
git remote remove origin

Purpose:
Removes remote repository.

Example:
git remote remove origin

## git fetch

Syntax:
git fetch

Purpose:
Downloads changes from remote.

Example:
git fetch

## git fetch --all

Syntax:
git fetch --all

Purpose:
Fetches all remote repositories.

Example:
git fetch --all

## git pull

Syntax:
git pull

Purpose:
Fetches and merges changes.

Example:
git pull

## git pull --rebase

Syntax:
git pull --rebase

Purpose:
Fetches changes and rebases.

Example:
git pull --rebase

## git push

Syntax:
git push

Purpose:
Uploads commits to remote repository.

Example:
git push

## git push -u origin branch-name

Syntax:
git push -u origin branch-name

Purpose:
Pushes branch and sets upstream.

Example:
git push -u origin main

## git push --force

Syntax:
git push --force

Purpose:
Force pushes commits.

Example:
git push --force

# 9. Stash Commands

## git stash

Syntax:
git stash

Purpose:
Temporarily saves changes.

Example:
git stash

## git stash list

Syntax:
git stash list

Purpose:
Shows saved stashes.

Example:
git stash list

## git stash pop

Syntax:
git stash pop

Purpose:
Applies and removes stash.

Example:
git stash pop
## git stash apply

Syntax:
git stash apply

Purpose:
Applies stash without removing it.

Example:
git stash apply

## git stash drop

Syntax:
git stash drop

Purpose:
Deletes a stash.

Example:
git stash drop

## git stash clear

Syntax:
git stash clear

Purpose:
Removes all stashes.

Example:
git stash clear

# 10. Reset Commands

## git reset

Syntax:
git reset

Purpose:
Unstages changes.

Example:
git reset

## git reset --soft

Syntax:
git reset --soft HEAD~1

Purpose:
Moves HEAD but keeps changes staged.

Example:
git reset --soft HEAD~1

## git reset --mixed

Syntax:
git reset --mixed HEAD~1

Purpose:
Unstages changes but keeps files.

Example:
git reset --mixed HEAD~1

## git reset --hard

Syntax:
git reset --hard HEAD~1

Purpose:
Deletes commits and changes.

Example:
git reset --hard HEAD~1

## git revert

Syntax:
git revert <commit-id>

Purpose:
Creates new commit to undo changes.

Example:
git revert 123abc

# 11. Rebasing Commands

## git rebase

Syntax:
git rebase <branch>

Purpose:
Reapplies commits on another base branch.

Example:
git rebase main

## git rebase -i

Syntax:
git rebase -i HEAD~3

Purpose:
Interactive rebasing.

Example:
git rebase -i HEAD~3

## git rebase --continue

Syntax:
git rebase --continue

Purpose:
Continues rebasing after conflict resolution.

Example:
git rebase --continue

## git rebase --abort

Syntax:
git rebase --abort

Purpose:
Cancels rebase process.

Example:
git rebase --abort

# 12. Cherry Pick & Patch

## git cherry-pick

Syntax:
git cherry-pick <commit-id>

Purpose:
Applies commit from another branch.

Example:
git cherry-pick abc123

## git format-patch

Syntax:
git format-patch -1

Purpose:
Creates patch file from commit.

Example:
git format-patch -1

## git apply

Syntax:
git apply patchfile.patch

Purpose:
Applies patch to code.

Example:
git apply patchfile.patch

## git am

Syntax:
git am patchfile.patch

Purpose:
Applies patch and creates commit.

Example:
git am patchfile.patch

# 13. Tagging Commands

## git tag

Syntax:
git tag

Purpose:
Lists tags.

Example:
git tag

## git tag -a

Syntax:
git tag -a v1.0 -m "version 1"

Purpose:
Creates annotated tag.

Example:
git tag -a v1.0 -m "version 1"

## git tag -d

Syntax:
git tag -d v1.0

Purpose:
Deletes tag.

Example:
git tag -d v1.0

## git push origin --tags

Syntax:
git push origin --tags

Purpose:
Pushes tags to remote repository.

Example:
git push origin --tags

# 14. Submodule Commands

## git submodule add

Syntax:
git submodule add <repo-url>

Purpose:
Adds another repository inside project.

Example:
git submodule add https://github.com/user/hotel.git

## git submodule init

Syntax:
git submodule init

Purpose:
Initializes submodules.

Example:
git submodule init

## git submodule update

Syntax:
git submodule update

Purpose:
Updates submodules.

Example:
git submodule update

# 15. Debugging Commands

## git bisect

Syntax:
git bisect

Purpose:
Finds commit that introduced bug.

Example:
git bisect

## git bisect start

Syntax:
git bisect start

Purpose:
Starts binary search for bug.

Example:
git bisect start
## git bisect good

Syntax:
git bisect good <commit>

Purpose:
Marks commit as good.

Example:
git bisect good abc123

## git bisect bad

Syntax:
git bisect bad <commit>

Purpose:
Marks commit as bad.

Example:
git bisect bad abc123
