import http from 'k6/http';
import { sleep } from 'k6';

export const options = {
  vus: 1000,
  iterations: 10000, 
};

export default function () {
  http.get('https://emurochisp.netlify.app');
  sleep(1)
}
