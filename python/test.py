#! /usr/bin/python3.4
'''
/**
 *     FileName: test.py
 *         Desc: 
 *       Author: thomasjiao
 *        Email: thomasjiao@vip.qq.com
 *     HomePage: http://blog.csdn.net/thomasjiao
 *      Version: 0.0.1
 *       Create: 2014-06-16 13:09:51
 *      History:
 */
'''

test = open('tongxunlu.csv', 'r')
#all_the_test = test.read()
#print(all_the_test)
list_of_lines = test.readlines()
n = list(list_of_lines)
for element in list_of_lines:
    print(element)
#print(list_of_lines[1])
test.close()

