load data local infile "SampleData/ParticipantSampleData.csv"
into table `participant`
fields terminated by "," enclosed by "'"
lines terminated by "\r\n"
ignore 1 rows;

load data local infile "SampleData/HasHobbySampleData.csv"
into table `has hobby`
fields terminated by "," enclosed by "'"
lines terminated by "\r\n"
ignore 1 rows;

load data local infile "SampleData/SpeaksSecondLanguageSampleData.csv"
into table `speaks second language`
fields terminated by "," enclosed by "'"
lines terminated by "\r\n"
ignore 1 rows;

load data local infile "SampleData/IsRaceSampleData.csv"
into table `is race`
fields terminated by "," enclosed by "'"
lines terminated by "\r\n"
ignore 1 rows;