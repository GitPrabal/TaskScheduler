# TaskScheduler

Simple Library For Task Scheduler

**Database Configuration For Task Scheduler**

Run
http://yourvirtualhostname/api/task.php
It will automatically create task table in database and insert some data into table

**For Run Script**
POST http://yourvirtualhostname/api/task.php

You need to pass two parameters for creating task

{
   "job" : "job_type",
   "status" : "job_status"
}


**Database Configuration For Task Scheduler**

Once table has been created we can easily retrive pending task from task table

http://yourvirtualhostname/api/getTask.php

Response

{
    "results": [
        {
            "id": "1",
            "job": "job_type"
        },
        {
            "id": "2",
            "job": "job_type"
        },
        {
            "id": "3",
            "job": "job_type"
        }
    ],
    "message": "success"
}


