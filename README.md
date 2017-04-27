# ServerPilotQuery
Unofficial way to call the internal ServerPilot API, which extends server statistics and usage

The serverpilot API is pretty bare bones at this time (April 2017) and lacks essential features.
I noticed the dashboard for serverpilot.io makes calls to manage.serverpilot.io and it turns out they accept JSON so it's so simple to get going.

## Usage
The process is simple
* POST to https://manage.serverpilot.io/v1/account/session/start
    * JSON BODY containing login credentials (see login.php)
* GET a list of servers from https://manage.serverpilot.io/v1/servers
    * You need BASIC AUTH headers which is made up like so:
    * `Username`: your login email address
    * `Password`: `sessionid` returned by login (inside login body JSON)
    * base64(Username:Password)
    * See servers.php for a demo
    

# Example return JSON from servers endpoint
```
{
	"data": [
		{
			"id": "xxx081083083",
			"lastaddress": "139.001.000.001",
			"curtime": 1493310856,
			"lastconn": 1493310799,
			"autoupdates": true,
			"datecreated": 1471855699,
			"installstatus": null,
			"firewall": true,
			"transfer": null,
			"stats": {
				"cpu_pct": 1,
				"disk_used": 12604852,
				"mem_total": 1016216,
				"disk_total": 20510568,
				"mem_used": 339044
			},
			"firstconn": 1471855720,
			"name": "staging001"
		},
		{
			"id": "xyz1234",
			"lastaddress": "138.00.00.00",
			"curtime": 1493310856,
			"lastconn": 1493310827,
			"autoupdates": true,
			"datecreated": 1486030890,
			"installstatus": null,
			"firewall": true,
			"transfer": null,
			"stats": {
				"cpu_pct": 0,
				"disk_used": 5473560,
				"mem_total": 500100,
				"disk_total": 20263528,
				"mem_used": 198512
			},
			"firstconn": 1486030913,
			"name": "test-stack-lamp-001"
		}
	]
}
```
