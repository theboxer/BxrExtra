# BxrExtra

BxrExtra is based on modExtra from Shaun McCormick.

## Setup

Create directory 'yourcomponent'.
Clone BxrExtra to yourcomponent directory by running 'git clone git://github.com/TheBoxer/BxrExtra.git .' from yourcomponent folder.
You can delete '.git' folder now.

Edit 'config.core.php' file and point 'MODX_CORE_PATH' constant to your MODx core location.

Now you want to rename BxrExtra to YourComponent, co first of all edit 'rename_it.sh' and set
'repl1' to 'YourComponent',
'repl2' to 'yourcomponent' and
'path' to './yourcomponent'.
Run 'rename_it.sh'
Edit 'yourcomponent/core/components/yourcomponent/templates/home.tpl' and change id of div from 'bxrextra-panel-home-div' to 'yourcomponent-panel-home-div'.

After this changes add two settings in your manager System Settings:

- 'yourcomponent.core_path' - Point to /yourcomponent/core/components/yourcomponent/
- 'yourcomponent.assets_url' - /yourcomponent/assets/components/yourcomponent/

Assets url must be visible from web.

Next step is creating namespace with name 'yourcomponent', core path 'Point to /yourcomponent/core/components/yourcomponent/' and assets path 'Point to /yourcomponent/assets/components/yourcomponent/'.
After you created namespace, add new action under YourComponent namespace with index controller and without parent controller.
Place just created action under Component menu (or where ever you want) with lexicon key 'yourcomponent' and description 'yourcomponent.menu_desc'.
Then clear the cache and refresh manager page.

If you want to create default database table provided in BxrExtra add new snipper in your manager, call it createDBTable and set it as static. Set media sources for Static files to '(None)' and Static file to '[[++yourcomponent.core_path]]/elements/snippets/snippet.yourcomponentCreateDB.php'.
Use 'createDBTable' snippet in any of your resources and run it. You shoud get 'Table created.' message.

Now you should have fully working extra with functions described below.

## Functionality

- Integrates a custom table of "Items"
- A snippet listing Items sorted by name and templated with a chunk
- A custom manager page to manage Items on
- Class based processors
- Grid with inline editing, right menu function and new item / update item / delete item window and search box

If you do not require all of this functionality, simply remove it and change the appropriate code.

## Others
Fell free to open pull requests or add [issues](https://github.com/TheBoxer/BxrExtra/issues "Issues").