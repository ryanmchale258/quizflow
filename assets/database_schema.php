Products
id, name, sku(store), url, image

Endpoint
id path
1  25_1:a_2:1_
2  35_1:
3  36_1:
4
5

Products_Endpoint
id product endpoint_id
1     5       1
2     5       2
3     5       3
4     7       3

Quiz
id name, datetime, active

Endpoints_Quiz
id product quiz
1  5        2
2  5		3

Question
id stage question exits         node_id
	1	    text	no,no,yes		0,0,1


Question Product Quiz
id question_id product_id quiz_id