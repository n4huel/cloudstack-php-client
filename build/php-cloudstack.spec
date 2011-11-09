Name:       php-cloudstack
Summary:    PHP client library for CloudStack API 
Version:    0.0.1
Release:    1
License:    Open Source 
Group:      System Environment/Libraries
Source0:    php-cloudstack-%{version}.tar.gz  
URL:        https://github.com/jasonhancock/cloudstack-php-client 
Buildarch:  noarch
BuildRoot:  %{_tmppath}/%{name}-%{version}-%{release}-root
Requires:   php-pecl-http

%description
PHP client library for the CloudStack Admin API

%prep

%setup -q -n %{name}-%{version}


%build

%install

rm -rf "${RPM_BUILD_ROOT}"

#   install directories.
install -p -d -m 755 "${RPM_BUILD_ROOT}/%{_datadir}/php/CloudStack/"


#   Install files.
DEST_DIR="${RPM_BUILD_ROOT}/%{_datadir}/php/CloudStack/"

install -p -m 644 CloudStack/BaseCloudStackClient.php      $DEST_DIR
install -p -m 644 CloudStack/CloudStackClientException.php $DEST_DIR
install -p -m 644 CloudStack/CloudStackClient.php          $DEST_DIR

%clean
rm -rf "${RPM_BUILD_ROOT}"


%files

%defattr(-, root, root, -)
%doc README.md LICENCE
%{_datadir}/php/CloudStack
%dir %{_datadir}/php/CloudStack

%changelog
* Wed Nov 09 2011 Jason Hancock <jsnbyh@gmail.com> 0.0.1-1
- Initial version.
