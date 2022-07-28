
# Instagram Watcher

This program is used to monitor complaints submitted through Hendrar Prihadi's Instagram comments column.


## Deployment

To deploy this project:
1. Clone this repo
2. Import database (file: instagram-watcher.sql)
3. Install dependencies
```bash
  npm install
```
4. Rename .env.example file to .env
5. Edit database configuration in .env file
6. Open website


## Running Job Scheduler 

Add this command to crontab
```bash
0 * * * * php ./jobs.php
```
Or run manually
```bash
php ./jobs.php
```
Or open in browser
http://your-website/jobs.php
