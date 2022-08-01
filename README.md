# FSD-weather-message-collector

简单的以vatsim为气象源的气象报文获取器，添加定时任务即可使用。
并且修改fsd.conf中的weather部分改为如下

[weather]
source=file

这样的话就可以在Euroscope中获取气象报文
