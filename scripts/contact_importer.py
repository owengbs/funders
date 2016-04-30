#coding=utf8
import sys, MySQLdb, time

dbfield_csvfield_dict_jingwei = {
    'name':'姓名_1',
    'en_name':'英文名_1',
    'phone1':'手机_1',
    'telphone1':'电话_1',
    'email1':'电子邮件地址_1',
    'im':'IM_1',
    'comment':'附注_1',
    'position1':'职位_1',
    'company1':'公司_1',
    'department1':'所属部门_1',
    'address1':'地址_1',
    'website':'网址_1',
    'fax':'传真_1',
}

dbfield_csvfield_dict_manual = {
    'name':'姓名_1',
    'phone1':'手机_1',
    'email1':'电子邮件地址_1',
    'position1':'职位_1',
    'company1':'公司_1',
    'address1':'城市_1',
    'comment': '备注_1',
}

dbfield_csvfield_dict_maikexun = {
    'name':'姓名_1',
    'company1': '公司_1',
    'department1': '部门_1',
    'position1': '职务_1',
    'address1': '地址_1',
    'phone1':'手机_1',
    'telphone1': '电话_1',
    'email1':'邮箱_1',
}
csvfield_dbfield_dict = {}
for k,v in dbfield_csvfield_dict_maikexun.iteritems():
    csvfield_dbfield_dict[v] = k

class MySQLDbClient():
    def __init__(self):
        self.conn = MySQLdb.connect(host="localhost",user="root",passwd="4921110",db="funders",charset='utf8' )
        self.cursor = self.conn.cursor()
    def insertFuContacts(self, item):
        """
        item:{field:value,...}
        """
        keyliststr = ",".join(item.keys())
        valueliststr = ",".join(['"%s"' % (i) for i in item.values()])
        sql = 'insert into fu_contacts(%s) values(%s)' % \
              (keyliststr, valueliststr)
        try:
            self.cursor.execute(sql)
            self.conn.commit()
        except Exception, e:
            if e[0] != 1062:
                print e
                print sql
def importCSVFile(filename, delimiter):
    mysqlcli = MySQLDbClient()
    with open(filename, "r") as f:
        line = f.readline().replace("\n","").replace("\r","").replace("\"","")
        segs = line.split(delimiter)
        word = ""
        count = 1
        position_csvfield_dict = {}
        for i in range(len(segs)):
            if word == segs[i]:
                count += 1
            else:
                word = segs[i]
                count = 1
            csvkey = '%s_%d' % (word, count)
            if csvfield_dbfield_dict.has_key(csvkey):
                position_csvfield_dict[i] = csvfield_dbfield_dict[csvkey]

        for line in f.readlines():
            line = line.replace("\n","").replace("\r","").replace("\"","")
            segs = line.split(delimiter)
            item = {}
            for i in range(len(segs)):
                if position_csvfield_dict.has_key(i):
                    item[position_csvfield_dict[i]] = segs[i]
                    # print "%s:%s" % (position_csvfield_dict[i], segs[i])
            item['createtime'] = time.strftime("%Y-%m-%d %H:%M:%S")
            item['lastmodified'] = item['createtime']
            mysqlcli.insertFuContacts(item)
if __name__=="__main__":
    if len(sys.argv) < 2:
        print "usage:python *.py csvfile"
        exit()
    delimiter = ";"
    if len(sys.argv) > 2:
        delimiter = sys.argv[2]
    importCSVFile(sys.argv[1], delimiter)
