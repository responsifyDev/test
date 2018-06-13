#If the query returns as null, need to make sure we can account for that with an error message

#Adding a new company to the database
INSERT INTO company (company_name) VALUES {desired_name}
"UPDATE company SET date_added = NOW() WHERE company_name  = '". $varName."'"; #PHP syntax

#Adding A publication to the table
INSERT INTO publication (company_id) SELECT DISTINCT company_id FROM company WHERE company_name = {company_to_attach_to};
UPDATE publication SET pub_name = {desired_name} WHERE pub_id = (SELECT MAX(pub_id)) AND pub_name = "";

#Adding a new campaign to the table
INSERT INTO campaign (pub_id) SELECT DISTINCT pub_id FROM publication WHERE pub_name = {publication_to_attach_to}
UPDATE campaign SET campaign_name = {desired_name} WHERE campaign_id = (SELECT MAX(campaign_id)) AND campaign_name = ""

#Adding a new workflow
INSERT INTO workflow (campaign_id) SELECT DISTINCT campaign_id FROM campaign WHERE campaign_name = {campaign_attached_to}
UPDATE workflow SET workflow_name = {desired_name} WHERE workflow_id = (SELECT MAX(workflow_id)) AND workflow_name = ""

#Adding a new stage to a workflow
INSERT INTO stage (workflow_id) SELECT DISTINCT workflow_id FROM workflow WHERE workflow_name = {workflow_name};
UPDATE stage SET stage_name = {desired_name} WHERE stage_id = (SELECT MAX(stage_id)) AND stage_name = "";
UPDATE stage SET stage_description = {stage_description} WHERE stage_id = (SELECT MAX(stage_id)) AND stage_description = "";
UPDATE stage SET inProgress = 0;
UPDATE stage SET inProgress = 1 WHERE stage_name = {desired_name};

#Adding a new task to a stage
INSERT INTO tasks (user_email) SELECT DISTINCT user_email FROM wp_users WHERE user_email = "htoomyn@gmail.com";
UPDATE tasks SET task_name = "Create First Draft" WHERE task_id = (SELECT MAX(task_id)) AND task_name = "";
UPDATE tasks SET task_description = "Your task is to create the first draft of the Declaration of Independance. Please make sure it is at least 2 pages long!" WHERE task_id = (SELECT MAX(task_id)) AND task_description = "";

#When the task is ready to be assigned / Changes to the date need to be changed
UPDATE tasks SET date_assigned = DATE(NOW())
UPDATE tasks SET due_date = DATE_ADD(DATE(NOW()),INTERVAL 5 DAY)