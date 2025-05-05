# IIS Api cheatsheat

**Data types**

tinyint
- U nas sa zatial pouziva iba pre boolean
- Min: -127
- Max: 128

int
- Min: -2147483648
- Max: 2147483648

smallint
- Min: -32768
- Max: 32767

varchar
- Cislo v zatvorke udava maximalny pocet znakov stringu

**Users already in user table**

Basic password keby neviete ake aby ste ho nezabudali -> Heslo123

| Username | Password | Role |
|----------|----------|------|
| admin | admin123 | Admin |
| user | user123 | User |

**Data from API**

Stĺpce kde je auto_increment je lepšie keď nebudete vypĺňať, radšej nech si ich doplní DB

## Matches

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| matchID | int | NOT | Primary | NULL | auto_increment | |
| matchStart | datetime | NOT | | NULL | | |
| partOneID | int | YES | Foreign | NULL | | |
| partOneScore | int | YES | | NULL | | |
| partTwoID | int | YES | Foreign | NULL | | |
| partTwoScore | int | YES | | NULL | | |
| tnmntRound | smallint | NOT | | NULL | | |
| isFinished | tinyint | NOT | | 0 | | |
| tnmntID | int | NOT | Foreign | NULL | | |

---

## Participants

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| idTP | int | NOT | Primary | NULL | auto_increment | |
| tnmntID | int | NOT | Foreign | NULL | | |
| userID | int | YES | Foreign | NULL | | |
| teamID | int | YES | Foreign | NULL | | |
| placement | smallint | YES | | NULL | | |

---

## TeamPlayers

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| id | int | NOT | Primary | NULL | auto_increment |
| teamID | int | NOT | Foreign | NULL | |
| userID | int | NOT | Foreign | NULL | |

---

## Teams

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| teamID | int | NOT | Primary | NULL | auto_increment |
| leaderID | int | NOT | Foreign | NULL | |
| teamName | varchar(50) | NOT | Unique | NULL | |
| created | timestamp | NOT | | CURRENT_TIMESTAMP | |
| isApproved | tinyint | NOT | | 0 | |

---

## Tournaments

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| tnmntID | int | NOT | Primary | NULL | auto_increment |
| tnmntName | varchar(50) | NOT | | NULL | |
| gameType | varchar(50) | NOT | | NULL | |
| maxParticipants | smallint | NOT | | NULL | |
| isForTeams | tinyint | NOT | | 0 | |
| tnmntStart | datetime | NOT | | NULL | |
| isFinished | tinyint | NOT | | 0 | |
| creatorID | int | NOT | Foreign | NULL | |
| minPlayersPerGame | smallint | NOT | | 1 | |
| isApproved | tinyint | NOT | | 0 | |

---

## Users

Varchar pri password je nastavene na 255 kvoli hashom, netusim ako sa to bude spravat ked sa povolia hesla 255 dlhe, radsej by som ich obmedzil na 16 or sth like that

| Field | Type | Null | Key | Default | Extra |
|-------|------|------|-----|---------|-------|
| userID | int | NOT | Primary | NULL | auto_increment |
| username | varchar(50) | NOT | Unique | NULL | |
| pwd | varchar(255) | NOT | | NULL | |
| created | timestamp | NOT | | CURRENT_TIMESTAMP | |
| isAdmin | tinyint | NOT | | 0 | |
| isApproved | tinyint | NOT | | 0 | |
