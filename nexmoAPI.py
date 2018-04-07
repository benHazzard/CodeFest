import nexmo
client = nexmo.Client(key='fe9c0087', secret='b91e5377e5a92cc6')

response = client.send_message({'from': '12013505982', 'to': '12037671014', 'text': 'Welcome: your code is 3435'})

response = response['messages'][0]

if response['status'] == '0':
  print('Sent message', response['message-id'])

  print('Remaining balance is', response['remaining-balance'])
else:
  print('Error:', response['error-text'])
