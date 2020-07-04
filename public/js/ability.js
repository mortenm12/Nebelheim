function loadAbility(abilityName, xpList, cost)
{
    document.getElementById('abilityName').innerHTML = abilityName;
    document.getElementById('cost').innerHTML = cost;

    xps = document.getElementById('xps').children;

    for(i in xps)
    {
        if(xps[i].id != 'header' && xps[i].id != 'footer')
        {
            if(xps[i].classList != undefined)
            {
                xps[i].classList.add('d-none');
            }
        }
    }
    document.getElementById('Baby XP').classList.remove('d-none');

    for(i in xpList)
    {
        document.getElementById(xpList[i]['xp_type']).classList.remove('d-none');
    }

}

function updateBack(xpType, xpList)
{
    brugt = document.getElementById(xpType + 'brugt').value;
    max = document.getElementById(xpType + 'brugt').max;
    document.getElementById(xpType + 'tilbage').innerHTML = max - brugt;

    xps = document.getElementById('xps').children;
    total = 0;

    for(i in xps)
    {
        if(xps[i].id != 'header' && xps[i].id != 'footer')
        {
            if(xps[i].classList != undefined)
            {
                if(!xps[i].classList.contains('d-none'))
                {
                    total += parseInt(document.getElementById(xps[i].id+'brugt').value);
                }
            }
        }
    }

    document.getElementById('total').innerHTML = total;
}

